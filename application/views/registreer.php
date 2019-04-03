<h1><?php echo $titel ?></h1>
<p>In deze pagina kan je je registreren voor onze Mantelzorg applicatie</p>

<?php
$attributes = array('name' => 'mijnFormulier','novalidate' => 'novalidate', 'class' => 'needs-validation');
echo form_open('home/registreerGebruiker', $attributes);
?>

<div class="row">
    <div class="form-group col-md-4">
        <?php
            echo form_label('Voornaam', 'voornaam');

            $voornaam = array('id' => 'voornaam',
                'name' => 'voornaam',
                'class' => 'form-control',
                'placeholder' => 'Voornaam',
                'required' => 'required');
            echo form_input($voornaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een Voornaam op.</div>
    </div>
    <div class="form-group col-md-4">
        <?php
            echo form_label('Familienaam', 'familienaam');

            $familienaam = array('id' => 'familienaam',
                'name' => 'familienaam',
                'class' => 'form-control',
                'placeholder' => 'Familienaam',
                'required' => 'required');
            echo form_input($familienaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een familienaam op.</div>
    </div>
    <div class="form-group col-md-3">
        <?php
            echo form_label('Geboortedatum', 'geboortedatum');
            $date = strtotime('Y-m-d -1 year');

            $geboortedatum = array('id' => 'Geb-datum',
                'name' => 'Geb-datum',
                'class' => 'form-control',
                'type' => 'date',
                'required pattern' => "[0-9]{4}-[0-9]{2}-[0-9]{2}",
                'min' => '',
                'required' => 'required');
            echo form_input($geboortedatum) . "\n";
        ?>
        <div class="invalid-feedback">Geef een Geboortedatum op.</div>
    </div>
    <div class="form-group col-md-4">
        <?php
            echo form_label('E-mail', 'email');

            $email = array('id' => 'email',
                'name' => 'email',
                'class' => 'form-control',
                'type' => 'email',
                'placeholder' => 'mijnaam@mail.com',
                'required' => 'required');
            echo form_input($email) . "\n";
        ?>
        <div class="invalid-feedback">Geef een correct e-mail adres op.</div>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        <?php
            echo form_label('Woonplaats', 'woonplaats');

            $woonplaats = array('id' => 'woonplaats',
                'name' => 'woonplaats',
                'class' => 'form-control',
                'placeholder' => 'Stad/dorp',
                'required' => 'required');
            echo form_input($woonplaats) . "\n";
        ?>
        <div class="invalid-feedback">Geef een woonplaats op.</div>
    </div>
    <div class="form-group col-md-2">
        <?php
            echo form_label('Postcode', 'postcode');

            $woonplaats = array('id' => 'postcode',
                'name' => 'postcode',
                'class' => 'form-control',
                'placeholder' => 'Postcode',
                'required' => 'required');
            echo form_input($woonplaats) . "\n";
        ?>
        <div class="invalid-feedback">Geef een postcode op.</div>
    </div>
    <div class="form-group col-md-4">
        <?php
            echo form_label('Adres', 'adres');

            $adres = array('id' => 'adres',
                'name' => 'adres',
                'class' => 'form-control',
                'placeholder' => 'Straatnaam x',
                'required' => 'required');
            echo form_input($adres) . "\n";
        ?>
        <div class="invalid-feedback">Geef een adres op.</div>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        <?php
            echo form_label('Gebruikersnaam', 'gebruikersnaam');

            $gebruikersnaam = array('id' => 'gebruikersnaam',
                'name' => 'gebruikersnaam',
                'class' => 'form-control',
                'placeholder' => 'Gebruikersnaam',
                'required' => 'required');
            echo form_input($gebruikersnaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een gebruikersnaam op.</div>
    </div>
    <div class="form-group col-md-3">
        <?php
            echo form_label('Wachtwoord', 'wachtwoord');

            $wachtwoord = array('id' => 'wachtwoord',
                'name' => 'wachtwoord',
                'class' => 'form-control',
                'type' => 'password',
                'placeholder' => 'Wachtwoord',
                'required' => 'required');
            echo form_input($wachtwoord) . "\n";
        ?>
        <div class="invalid-feedback">Geef een wachtwoord op.</div>
    </div>
    <div class="form-group col-md-3">
        <?php
            echo form_label('Wachtwoord bevestigen', 'wachtwoordBev');

            $wachtwoord = array('id' => 'wachtwoordBev',
                'name' => 'wachtwoordBev',
                'class' => 'form-control',
                'type' => 'password',
                'placeholder' => 'Wachtwoord');
            echo form_input($wachtwoord) . "\n";
        ?>
    </div>
</div>
<div class="form-group">

    <?php echo form_submit('knop', 'Registreren', "class='btn btn-primary'") ?>
</div>

<?php echo form_close(); ?>


<div class='col-12 mt-4'> <?php echo anchor('home', 'Terug'); ?> </div>