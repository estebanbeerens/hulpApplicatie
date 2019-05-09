<?php
    /**
     * Ontwerper: Tomas
     * Tester: ?
     *
     * @file evenementBewerken.php
     * View waarin het geselecteerde evenement bewerkt kan worden
     * - krijgt een $evenement-object binnen
     * - maakt gebruikt van een Bootstrap-form
     *
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
        ?>

        <div class="input-group mb-3">
            <select class="custom-select" id="beschrijving"
                    name="beschrijving">
                <option selected><?php echo $evenement->beschrijving; ?></option>
                <?php
                    if($evenement->beschrijving == 'Activiteit'){
                        ?>
                            <option value="Ontbijt">Ontbijt</option>
                            <option value="Avondeten">Avondeten</option>
                        <?php
                    }
                    if($evenement->beschrijving == 'Ontbijt'){
                        ?>
                        <option value="Activiteit">Activiteit</option>
                        <option value="Avondeten">Avondeten</option>
                        <?php
                    }
                    if($evenement->beschrijving == 'Avondeten'){
                        ?>
                        <option value="Activiteit">Activiteit</option>
                        <option value="Ontbijt">Ontbijt</option>
                        <?php
                    }

                ?>
            </select>
            <div class="input-group-append">
                <label class="input-group-text" for="beschrijving">Opties</label>
            </div>
        </div>

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
        <?php echo form_submit('knop', 'Bevestigen', "class='btn btn-primary' data-toggle=\"tooltip\" data-placement=\"right\" title=\"Wijziging opslaan\"") ?>
    </div>
    <?php echo form_close(); ?>
    <div class='col-12 mt-4'> <?php echo anchor('evenement/evenementBeheren', 'Terug'); ?> </div>
</div>
