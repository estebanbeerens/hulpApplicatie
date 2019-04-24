<?php
    /**
     * Ontwerper: Tomas
     * Tester: ?
     */

    $gebruikerBewerkenFormulier = array('id' => 'gebruikerBewerkenFormulier', 'novalidate' => 'novalidate', 'class' => 'needs-validation');
    echo form_open('gebruiker/gebruikerUpdaten/' . $gebruiker->id, $gebruikerBewerkenFormulier, $gebruiker->id);
?>

<div class="form-row">
    <div class="form-group col-md-6">
        <?php
            echo form_label('Gebruikernaam', 'naam');

            $dataNaam = array('id' => 'naam',
                'name' => 'naam',
                'class' => 'form-control',
                'placeholder' => 'Evenementnaam',
                'value' => $gebruiker->naam,
                'required' => 'required');
            echo form_input($dataNaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een evenementnaam op.</div>
    </div>


    <div class="form-group col-md-3">
        <?php echo form_submit('knop', 'Wijzigen', "class='btn btn-primary'") ?>
    </div>
    <?php echo form_close(); ?>
    <div class='col-12 mt-4'> <?php echo anchor('evenement/evenementBeheren', 'Terug'); ?> </div>
</div>
