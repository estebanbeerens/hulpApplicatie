<?php
    /**
     * @file login.php
     *
     * View waarin men een persoon kan inloggen.
     * - Gebruikt Bootstrap form en controle
     */



$attributes = array('name' => 'mijnFormulier','novalidate' => 'novalidate', 'class' => 'needs-validation');
echo form_open('home/controleerAanmelden', $attributes);
?>

<div class="row">
    <div class="form-group col-md-7">
        <?php
        echo form_label('Naam', 'naam');

        $dataNaam = array('id' => 'naam',
                    'name' => 'naam',
                    'class' => 'form-control',
                    'placeholder' => 'Gebruikersnaam',
                    'required' => 'required');
        echo form_input($dataNaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef je gebruikersnaam op.</div>
    </div>

    <div class="form-group col-md-7">
        <?php
        echo form_label('Wachtwoord', 'passwoord');
        $dataWachtwoord = array('id' => 'passwoord',
                'name' => 'passwoord',
                'class' => 'form-control',
                'placeholder' => 'Wachtwoord',
                'required' => 'required');
        echo form_password($dataWachtwoord);
        ?>
        <div class="invalid-feedback">Geef je wachtwoord op.</div>
    </div>
</div>

<div class="form-group">
    <?php echo form_submit('knop', 'Inloggen', "class='btn btn-primary'") ?>
</div>
<?php echo form_close(); ?>

<p>Geen account?  <?php echo anchor('gebruiker/registreer', 'Registreer'); ?></p>