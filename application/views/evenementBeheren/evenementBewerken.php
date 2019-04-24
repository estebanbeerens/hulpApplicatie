<?php
    /**
     * Ontwerper: Tomas
     * Tester: ?
     */

    $evenementBewerkenFormulier = array('id' => 'evenementToevoegenFormulier', 'novalidate' => 'novalidate', 'class' => 'needs-validation');
    echo form_open('Evenement/evenementUpdaten/' . $evenement->id, $evenementBewerkenFormulier, $evenement->id);
?>

<div class="form-row">
    <div class="form-group col-md-6">
        <?php
            echo form_label('Evenementnaam', 'naam');

            $dataNaam = array('id' => 'naam',
                'name' => 'naam',
                'class' => 'form-control',
                'placeholder' => 'Evenementnaam',
                'value' => $evenement->naam,
                'required' => 'required');
            echo form_input($dataNaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een evenementnaam op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Meldingtijd', 'meldingtijd');

        $dataMeldingtijd = array('id' => 'meldingtijd',
            'name' => 'meldingTijd',
            'class' => 'form-control',
            'placeholder' => 'Meldingtijd',
            'value' => $evenement->meldingTijd,
            'required' => 'required');
        echo form_input($dataMeldingtijd) . "\n";
        ?>
        <div class="invalid-feedback">Geef een meldingtijd op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Locatie', 'locatie');

        $dataLocatie = array('id' => 'locatie',
            'name' => 'locatie',
            'class' => 'form-control',
            'placeholder' => 'Locatie',
            'value' => $evenement->locatie,
            'required' => 'required');
        echo form_input($dataLocatie) . "\n";
        ?>
        <div class="invalid-feedback">Geef een locatie op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Datum', 'datum');

        $dataDatum = array('id' => 'datum',
            'type' => 'date',
            'name' => 'datum',
            'class' => 'form-control',
            'placeholder' => 'Datum',
            'value' => $evenement->datum,
            'required' => 'required');

        echo form_input($dataDatum) . "\n";
        ?>
        <div class="invalid-feedback">Geef een datum op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Starttijd', 'starttijd');

        $dataStarttijd = array('id' => 'starttijd',
            'type' => 'time',
            'name' => 'starttijd',
            'class' => 'form-control',
            'placeholder' => 'Starttijd',
            'value' => $evenement->startTijd,
            'required' => 'required');

        echo form_input($dataStarttijd) . "\n";
        ?>
        <div class="invalid-feedback">Geef een starttijd op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Eindtijd', 'eindtijd');

        $dataEindtijd = array('id' => 'eindtijd',
            'type' => 'time',
            'name' => 'eindtijd',
            'class' => 'form-control',
            'placeholder' => 'Eindtijd',
            'value' => $evenement->eindTijd,
            'required' => 'required');

        echo form_input($dataEindtijd) . "\n";
        ?>
        <div class="invalid-feedback">Geef een eindtijd op.</div>
    </div>

    <div class="form-group col-md-12">
        <?php
        echo form_label('Beschrijving', 'beschrijving');

        $dataBeschrijving = array('id' => 'beschrijving',
            'name' => 'beschrijving',
            'class' => 'form-control',
            'value' => $evenement->beschrijving,
            'placeholder' => 'Beschrijving',
            'required' => 'required',
            'rows' => 5);
        echo form_textarea($dataBeschrijving) . "\n";
        ?>
        <div class="invalid-feedback">Geef een beschrijving op.</div>
    </div>

    <div class="form-group col-md-12">

        <?php

        if($evenement->verplicht == 1){
            $dataVerplicht = array('id' => 'verplicht',
                'type' => 'checkbox',
                'name' => 'verplicht',
                'class' => 'form-check-input',
                'value' => $evenement->verplicht,
                'checked' => 'checked',

                'data-toggle' => 'tooltip',
                'data-placement' => 'bottom',
                'title' => 'Is deelname verplicht?',
            );
        }else{
            $dataVerplicht = array('id' => 'verplicht',
                'type' => 'checkbox',
                'name' => 'verplicht',
                'class' => 'form-check-input',
                'value' => $evenement->verplicht,

                'data-toggle' => 'tooltip',
                'data-placement' => 'bottom',
                'title' => 'Is deelname verplicht?',


            );
        }


        echo form_input($dataVerplicht);
        echo form_label('Verplicht?', 'verplicht', 'class="form-check-label" for="verplicht"');
        ?>


    </div>
    <div class="form-group col-md-12">

        <?php

        if($evenement->isHerhaling == 1){
            $dataIsherhaling = array('id' => 'herhaling',
                'type' => 'checkbox',
                'name' => 'herhaling',
                'class' => 'form-check-input',
                'value' => $evenement->isHerhaling,
                'checked' => 'checked',

                'data-toggle' => 'tooltip',
                'data-placement' => 'bottom',
                'title' => 'Is er herhaling?',
            );
        }else{
            $dataIsherhaling = array('id' => 'herhaling',
                'type' => 'checkbox',
                'name' => 'herhaling',
                'class' => 'form-check-input',
                'value' => $evenement->isHerhaling,

                'data-toggle' => 'tooltip',
                'data-placement' => 'bottom',
                'title' => 'Is er herhaling?',
            );
        }

        echo form_input($dataIsherhaling);
        echo form_label('Herhaling?', 'herhaling', 'class="form-check-label" for="herhaling"');
        ?>


    </div>


    <div class="form-group col-md-3">
        <?php echo form_submit('knop', 'Bevestigen', "class='btn btn-primary'") ?>
    </div>
    <?php echo form_close(); ?>
    <div class='col-12 mt-4'> <?php echo anchor('evenement/evenementBeheren', 'Terug', 'data-toggle="tooltip" data-placement="bottom" title="Terug naar evenementen beheren"'); ?> </div>
</div>
