<?php
$patientToevoegenFormulier = array('id' => 'patientToevoegenFormulier', 'novalidate' => 'novalidate', 'class' => 'needs-validation');
echo form_open('patient/patientUpdaten/' . $patient->id, $patientToevoegenFormulier, $patient->id);
?>

<div class="form-row">
    <div class="form-group col-md-6">
        <?php
        echo form_label('Evenementnaam', 'naam');

        $naam = array('id' => 'naam',
            'name' => 'naam',
            'class' => 'form-control',
            'placeholder' => 'Evenementnaam',
            'value' => $patient->naam,
            'required' => 'required');
        echo form_input($naam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een evenementnaam op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Voornaam', 'voornaam');

        $voornaam = array('id' => 'voornaam',
            'name' => 'voornaam',
            'class' => 'form-control',
            'placeholder' => 'Voornaam',
            'value' => $patient->voornaam,
            'required' => 'required');
        echo form_input($voornaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een voornaam op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('geboortedatum', 'geboortedatum');

        $geboortedatum = array('id' => 'gebDatum',
            'name' => 'gebDatum',
            'type' => 'date',
            'class' => 'form-control',
            'placeholder' => 'Geboortedatum',
            'value' => $patient->geboortedatum,
            'required' => 'required');
        echo form_input($geboortedatum) . "\n";
        ?>
        <div class="invalid-feedback">Geef een geboortedatum op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('woonplaats', 'woonplaats');

        $woonplaats = array('id' => 'woonplaats',

            'name' => 'woonplaats',
            'class' => 'form-control',
            'placeholder' => 'woonplaats',
            'value' => $patient->woonplaats,
            'required' => 'required');

        echo form_input($woonplaats) . "\n";
        ?>
        <div class="invalid-feedback">Geef een woonplaats op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('adres', 'adres');

        $adres = array('id' => 'adres',

            'name' => 'adres',
            'class' => 'form-control',
            'placeholder' => 'adres',
            'value' => $patient->adres,
            'required' => 'required');

        echo form_input($adres) . "\n";
        ?>
        <div class="invalid-feedback">Geef een adres op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('gebruikersnaam', 'gebruikersnaam');

        $gebruikersnaam = array('id' => 'gebruikersnaam',

            'name' => 'gebruikersnaam',
            'class' => 'form-control',
            'placeholder' => 'gebruikersnaam',
            'value' => $patient->gebruikersnaam,
            'required' => 'required');

        echo form_input($gebruikersnaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een gebruikersnaam op.</div>
    </div>

    <div class="form-group col-md-12">
        <?php
        echo form_label('email', 'email');

        $email = array('id' => 'email',
            'name' => 'email',
            'class' => 'form-control',
            'value' => $patient->email,
            'placeholder' => 'email',
            'required' => 'required',
            'rows' => 5);
        echo form_textarea($email) . "\n";
        ?>
        <div class="invalid-feedback">Geef een email op.</div>
    </div>




    </div>
    <div class="form-group col-md-12">





    </div>


    <div class="form-group col-md-3">
        <?php echo form_submit('knop', 'Bevestigen', "class='btn btn-primary' data-toggle=\"tooltip\" data-placement=\"right\" title=\"Wijziging opslaan\"") ?>
    </div>
    <?php echo form_close(); ?>
    <div class='col-12 mt-4'> <?php echo anchor('patient/beheerPatient', 'Terug'); ?> </div>
</div>