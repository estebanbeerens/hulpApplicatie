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

        $dataNaam = array('id' => 'voornaam',
            'name' => 'voornaam',
            'class' => 'form-control',
            'placeholder' => 'Voornaam',
            'required' => 'required');
        echo form_input($dataNaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een Voornaam op.</div>
    </div>
    <div class="form-group col-md-4">
        <?php
        echo form_label('Familienaam', 'familienaam');

        $dataNaam = array('id' => 'familienaam',
            'name' => 'familienaam',
            'class' => 'form-control',
            'placeholder' => 'Familienaam',
            'required' => 'required');
        echo form_input($dataNaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een familienaam op.</div>
    </div>
    <div class="form-group col-md-4">
        <?php
        echo form_label('Wachtwoord', 'wachtwoord');

        $dataNaam = array('id' => 'wachtwoord',
            'name' => 'wachtwoord',
            'class' => 'form-control',
            'placeholder' => 'Wachtwoord',
            'required' => 'required');
        echo form_input($dataNaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een wachtwoord op.</div>
    </div>
    <div class="form-group col-md-4">
        <?php
        echo form_label('Email', 'email');

        $dataNaam = array('id' => 'email',
            'name' => 'email',
            'class' => 'form-control',
            'placeholder' => 'Email',
            'required' => 'required');
        echo form_input($dataNaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een email op.</div>
    </div>

    <div class="form-group col-md-4">
        <?php
        echo form_label('woonplaats', 'woonplaats');

        $dataNaam = array('id' => 'woonplaats',
            'name' => 'woonplaats',
            'class' => 'form-control',
            'placeholder' => 'woonplaats',
            'required' => 'required');
        echo form_input($dataNaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een woonplaats op.</div>
    </div>

    <div class="form-group col-md-4">
        <?php
        echo form_label('adres', 'adres');

        $dataNaam = array('id' => 'adres',
            'name' => 'adres',
            'class' => 'form-control',
            'placeholder' => 'adres',
            'required' => 'required');
        echo form_input($dataNaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een adres op.</div>
    </div>

    <div class="form-group col-md-4">
        <?php
        echo form_label('Geb-datum', 'Geb-datum');

        $dataNaam = array('id' => 'Geb-datum',
            'name' => 'Geb-datum',
            'class' => 'form-control',
            'placeholder' => '1998-09-01',
            'required' => 'required');
        echo form_input($dataNaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een Geb-datum op.</div>
    </div>
    <div class="form-group col-md-4">
        <?php
        echo form_label('gebruikersnaam', 'gebruikersnaam');

        $dataNaam = array('id' => 'gebruikersnaam',
            'name' => 'gebruikersnaam',
            'class' => 'form-control',
            'placeholder' => 'gebruikersnaam',
            'required' => 'required');
        echo form_input($dataNaam) . "\n";
        ?>
        <div class="invalid-feedback">Geef een gebruikersnaam op.</div>
    </div>
</div>

<!--<table>-->
<!--    <tr>-->
<!--        <td>--><?php //echo form_label('Voornaam:', 'voornaam'); ?><!--</td>-->
<!--        <td>--><?php //echo form_input(array('name' => 'voornaam', 'id' => 'voornaam', 'size' => '30')); ?><!--</td>-->
<!--    </tr>-->
<!---->
<!--    <tr>-->
<!--        <td>--><?php //echo form_label('Naam:', 'naam'); ?><!--</td>-->
<!--        <td>--><?php //echo form_input(array('name' => 'naam', 'id' => 'naam', 'size' => '30')); ?><!--</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>--><?php //echo form_label('Geboortedatum:', 'geboortedatum'); ?>
<!--        <td>-->
<!--            <input size="16" type="text" value="01-09-1998" >-->
<!---->
<!--            <script type="text/javascript">-->
<!--                $(".form_datetime").datetimepicker({format: 'dd-mm-yyyy'});-->
<!--            </script>-->
<!--        </td>-->
<!---->
<!--            </div>-->
<!--        </td>-->
<!--        </tr>-->
<!--    <tr>-->
<!--        <td>--><?php //echo form_label('Woonplaats:', 'woonplaats'); ?><!--</td>-->
<!--        <td>--><?php //echo form_input(array('name' => 'woonplaats', 'id' => 'woonplaats', 'size' => '30')); ?><!--</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>--><?php //echo form_label('Adres:', 'adres'); ?><!--</td>-->
<!--        <td>--><?php //echo form_input(array('name' => 'adres', 'id' => 'adres', 'size' => '30')); ?><!--</td>-->
<!--    </tr>-->
<!---->
<!--    <tr>-->
<!--        <td>--><?php //echo form_label('Rekeningnummer:', 'rekeningnummer'); ?><!--</td>-->
<!--        <td>--><?php //echo form_input(array('name' => 'rekeningnummer', 'id' => 'rekeningnummer', 'size' => '30')); ?><!--</td>-->
<!--    </tr>-->
<!---->
<!--    <tr>-->
<!--        <td>--><?php //echo form_label('Gebruikersnaam:', 'gebruikersnaam'); ?><!--</td>-->
<!--        <td>--><?php //echo form_input(array('name' => 'gebruikersnaam', 'id' => 'gebruikersnaam', 'size' => '30')); ?><!--</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>--><?php //echo form_label('E-mail:', 'email'); ?><!--</td>-->
<!--        <td>--><?php //echo form_input(array('name' => 'email', 'id' => 'email', 'size' => '30')); ?><!--</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>--><?php //echo form_label('Wachtwoord:', 'wachtwoord'); ?><!--</td>-->
<!--        <td>--><?php
//            $data = array('name' => 'wachtwoord', 'id' => 'wachtwoord', 'size' => '30');
//            echo form_password($data);
//            ?>
<!--        </td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td></td>-->
<!--        <td>--><?php //echo form_submit('knop', 'Verzenden'); ?><!--</td>-->
<!--    </tr>-->
<!--</table>-->

<div class="form-group">

    <?php echo form_submit('knop', 'Registreren', "class='btn btn-primary'") ?>
</div>
<?php echo form_close(); ?>


<div class='col-12 mt-4'> <?php echo anchor('home', 'Terug'); ?> </div>


</p>