
<?php
/**
 * Ontwerper: Liam
 * Tester: ?
 */

$verzorgerBewerkenFormulier = array('id' => 'verzorgerToevoegenFormulier', 'novalidate' => 'novalidate', 'class' => 'needs-validation');
echo form_open('verzorger/verzorgersUpdaten/' . $verzorger->id, $verzorgerBewerkenFormulier, $verzorger->id);
?>

<div class="form-row">
    <div class="form-group col-md-6">
        <?php
        echo form_label('Verzorgernaam', 'naam');

        $dataNaam = array('id' => 'naam',
            'name' => 'naam',
            'class' => 'form-control',
            'placeholder' => 'Verzorgernaam',
            'value' => $verzorger->naam,
            'required' => 'required');
        echo form_input($dataNaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een verzorger op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Voornaam', 'voornaam');

        $dataVoornaam = array('id' => 'voornaam',
            'name' => 'voornaam',
            'class' => 'form-control',
            'placeholder' => 'Voornaam',
            'value' => $verzorger->voornaam,
            'required' => 'required');
        echo form_input($dataVoornaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een voornaam op.</div>
    </div>
    <div class="form-group col-md-12">
        <?php
        echo form_label('Geboortedatum', 'geboortedatum');

        $dataGeboortedatum = array('id' => 'geboortedatum',
            'type' => 'date',
            'name' => 'geboortedatum',
            'class' => 'form-control',
            'placeholder' => 'Geboortedatum',
            'value' => $verzorger->geboortedatum,
            'required' => 'required');
        echo form_input($dataGeboortedatum) . "\n";
        ?>
        <div class="invalid-feedback">Geef een geboortedatum op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Adres', 'adres');

        $dataAdres = array('id' => 'adres',
            'name' => 'adres',
            'class' => 'form-control',
            'placeholder' => 'Adres',
            'value' => $verzorger->adres,
            'required' => 'required');
        echo form_input($dataAdres) . "\n";
        ?>
        <div class="invalid-feedback">Geef een adres op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Woonplaats', 'woonplaats');

        $dataWoonplaats = array('id' => 'woonplaats',
            'name' => 'woonplaats',
            'class' => 'form-control',
            'placeholder' => 'Woonplaats',
            'value' => $verzorger->woonplaats,
            'required' => 'required');
        echo form_input($dataWoonplaats) . "\n";
        ?>
        <div class="invalid-feedback">Geef een woonplaats op.</div>
    </div>


    <div class="form-group col-md-6">
        <?php
        echo form_label('Gebruikersnaam', 'gebruikersnaam');

        $dataGebruikersnaam = array('id' => 'gebruikesrnaam',
            'name' => 'gebruikersnaam',
            'class' => 'form-control',
            'placeholder' => 'Gebruikersnaam',
            'value' => $verzorger->gebruikersnaam,
            'required' => 'required');
        echo form_input($dataGebruikersnaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een gebruikersnaam op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Passwoord', 'passwoord');

        $dataPasswoord = array('id' => 'passwoord',
            'name' => 'passwoord',
            'class' => 'form-control',
            'placeholder' => 'Passwoord',
            'value' => $verzorger->passwoord,
            'required' => 'required');
        echo form_input($dataPasswoord) . "\n";
        ?>
        <div class="invalid-feedback">Geef een passwoord op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Email', 'email');

        $dataEmail = array('id' => 'email',
            'name' => 'email',
            'class' => 'form-control',
            'placeholder' => 'Email',
            'value' => $verzorger->email,
            'required' => 'required');
        echo form_input($dataEmail) . "\n";
        ?>
        <div class="invalid-feedback">Geef een email op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Rekeningnummer', 'rekeningnummer');

        $dataRekeningnummer = array('id' => 'rekeningnummer',
            'name' => 'rekeningnummer',
            'class' => 'form-control',
            'placeholder' => 'Rekeningnummer',
            'value' => $verzorger->rekeningnummer,
            'required' => 'required');
        echo form_input($dataRekeningnummer) . "\n";
        ?>
        <div class="invalid-feedback">Geef een rekeningnummer op.</div>
    </div>

    <div class="form-group col-md-3">
        <?php echo form_submit('knop', 'Wijzigen', "class='btn btn-primary'") ?>
    </div>
    <?php echo form_close(); ?>
    <div class='col-12 mt-4'> <?php echo anchor('verzorger/verzorgersBeheren', 'Terug'); ?> </div>
</div>
