
<div class="form-row">
    <div class="form-group col-md-6">
        <?php
            echo form_label('Naam', 'naam');

            $dataNaam = array('id' => 'naam',
                'name' => 'naam',
                'class' => 'form-control',
                'placeholder' => 'Naam',
                'value' => $gebruiker->naam,
                'required' => 'required');
            echo form_input($dataNaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een naam op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Voornaam', 'voornaam');

        $dataVoornaam = array('id' => 'voornaam',
            'name' => 'voornaam',
            'class' => 'form-control',
            'placeholder' => 'Voornaam',
            'value' => $gebruiker->voornaam,
            'required' => 'required');
        echo form_input($dataVoornaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een voornaam op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Geboortedatum', 'geboortedatum');

        $dataGeboortedatum = array('id' => 'geboortedatum',
            'type' => 'date',
            'name' => 'geboortedatum',
            'class' => 'form-control',
            'placeholder' => 'Geboortedatum',
            'value' => $gebruiker->geboortedatum,
            'required' => 'required');
        echo form_input($dataGeboortedatum) . "\n";
        ?>
        <div class="invalid-feedback">Geef een geboortedatum op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Email', 'email');

        $dataEmail = array('id' => 'email',
            'name' => 'email',
            'class' => 'form-control',
            'placeholder' => 'Email',
            'value' => $gebruiker->email,
            'required' => 'required');
        echo form_input($dataEmail) . "\n";
        ?>
        <div class="invalid-feedback">Geef een emailadres op.</div>
    </div>
    <div class="form-group col-md-12">
        <?php
        echo form_label('Adres', 'adres');

        $dataAdres = array('id' => 'adres',
            'name' => 'adres',
            'class' => 'form-control',
            'placeholder' => 'Adres',
            'value' => $gebruiker->adres,
            'required' => 'required');
        echo form_input($dataAdres) . "\n";
        ?>
        <div class="invalid-feedback">Geef een adres op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Postcode', 'postcode');

        $dataPostcode = array('id' => 'postcode',
            'name' => 'postcode',
            'class' => 'form-control',
            'placeholder' => 'Postcode',
            'value' => $gebruiker->postcode,
            'required' => 'required');
        echo form_input($dataPostcode) . "\n";
        ?>
        <div class="invalid-feedback">Geef een postcode op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Woonplaats', 'woonplaats');

        $dataWoonplaats = array('id' => 'woonplaats',
            'name' => 'woonplaats',
            'class' => 'form-control',
            'placeholder' => 'Woonplaats',
            'value' => $gebruiker->woonplaats,
            'required' => 'required');
        echo form_input($dataWoonplaats) . "\n";
        ?>
        <div class="invalid-feedback">Geef een woonplaats op.</div>
    </div>
    <div class="form-group col-md-6">
        <?php
        echo form_label('Gebruikersnaam', 'gebruikersnaam');

        $dataGebruikersnaam = array('id' => 'gebruikersnaam',
            'name' => 'gebruikersnaam',
            'class' => 'form-control',
            'placeholder' => 'Gebruikersnaam',
            'value' => $gebruiker->gebruikersnaam,
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
            'value' => $gebruiker->passwoord,
            'required' => 'required');
        echo form_input($dataPasswoord) . "\n";
        ?>
        <div class="invalid-feedback">Geef een passwoord op.</div>
    </div>



    <div class="form-group col-md-3">
        <?php echo form_submit('knop', 'Wijzigen', "class='btn btn-primary'") ?>
    </div>
    <?php echo form_close(); ?>
    <div class='col-12 mt-4'><a href="javascript:history.go(-1)">Terug</a> </div>
</div>
