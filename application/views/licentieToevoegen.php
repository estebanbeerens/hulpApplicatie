<h1><?php echo $titel ?></h1>

<?php
    /**
     * Ontwerper: Esteban
     * Tester: ?
     */

    $licentieToevoegenFormulier = array('id' => 'licentieToevoegenFormulier', 'novalidate' => 'novalidate', 'class' => 'needs-validation');
    echo form_open('behandelValidatie', $licentieToevoegenFormulier);
?>

<div class="form-row">
    <div class="form-group col-md-5">
        <?php
            echo form_label('Licentienaam', 'naam');

            $dataNaam = array('id' => 'naam',
                'name' => 'naam',
                'class' => 'form-control',
                'placeholder' => 'Licentienaam',
                'required' => 'required');
            echo form_input($dataNaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een naam op.</div>
    </div>
    <div class="form-group col-md-2">
        <?php
            echo form_label('Prijs', 'prijs');

            $dataPrijs = array('id' => 'prijs',
                'name' => 'prijs',
                'type' => 'number',
                'class' => 'form-control',
                'placeholder' => '€',
                'required' => 'required');
            echo form_input($dataPrijs) . "\n";
        ?>
        <div class="invalid-feedback">Geef een prijs op.</div>
    </div>
    <div class="form-group col-md-10">
        <?php
            echo form_label('Beschrijving', 'beschrijving');

            $dataBeschrijving = array('id' => 'beschrijving',
                'name' => 'beschrijving',
                'class' => 'form-control',
                'placeholder' => 'Beschrijving',
                'required' => 'required',
                'rows' => 5);
            echo form_textarea($dataBeschrijving) . "\n";
        ?>
        <div class="invalid-feedback">Geef een beschrijving op.</div>
    </div>

    <div class="form-group col-md-3">
        <?php echo form_submit('knop', 'Toevoegen', "class='btn btn-primary'") ?>
    </div>
    <?php echo form_close(); ?>
</div>
