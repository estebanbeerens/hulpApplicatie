<?php

if($gebruiker->soortPersoonId == 1){
} else { redirect('home/meldaf'); } ?>

<?php
    /**
     * Ontwerper: Esteban
     * Tester: ?
     */
    /**
     * @file licentieBewerken.php
     *
     * View waarin men met een bepaalde form een licentie kan bewerken.
     * - Krijgt een $licentie-object binnen
     */

    $licentieBewerkenFormulier = array('id' => 'licentieToevoegenFormulier', 'novalidate' => 'novalidate', 'class' => 'needs-validation');
    echo form_open('Licentie/updateLicentie/' . $licentie->id, $licentieBewerkenFormulier, $licentie->id);
?>

<?php

if($gebruiker->soortPersoonId == 2 || $gebruiker->soortPersoonId == 3){

} else{
    redirect('home/meldaf');
}
?>

<div class="form-row">
    <div class="form-group col-md-5">
        <?php
            echo form_label('Licentienaam', 'naam');

            $dataNaam = array('id' => 'naam',
                'name' => 'naam',
                'class' => 'form-control',
                'placeholder' => 'Licentienaam',
                'value' => $licentie->naam,
                'required' => 'required');
            echo form_input($dataNaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een naam op.</div>
    </div>
    <div class="form-group col-md-2">
        <?php echo form_label('Prijs', 'prijs'); ?>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">€</span>
            </div>
            <?php
                $dataPrijs = array('id' => 'prijs',
                    'name' => 'prijs',
                    'type' => 'number',
                    'min' => 0,
                    'value' => $licentie->prijs,
                    'class' => 'form-control',
                    'required' => 'required');
                echo form_input($dataPrijs) . "\n";
            ?>
            <div class="invalid-feedback">Geef een prijs op.</div>
        </div>
    </div>
    <div class="form-group col-md-10">
        <?php
            echo form_label('Beschrijving', 'beschrijving');

            $dataBeschrijving = array('id' => 'beschrijving',
                'name' => 'beschrijving',
                'class' => 'form-control',
                'value' => $licentie->beschrijving,
                'placeholder' => 'Beschrijving',
                'required' => 'required',
                'rows' => 5);
            echo form_textarea($dataBeschrijving) . "\n";
        ?>
        <div class="invalid-feedback">Geef een beschrijving op.</div>
    </div>

    <div class="form-group col-md-3">
        <?php echo form_submit('knop', 'Wijzigen', "class='btn btn-primary'") ?>
    </div>
    <?php echo form_close(); ?>
    <div class='col-12 mt-4'> <?php echo anchor('licentie/licentieBeheren', 'Terug'); ?> </div>
</div>
