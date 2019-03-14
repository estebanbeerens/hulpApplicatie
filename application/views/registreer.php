<h1>Registreren</h1>
<p>In deze pagina kan je je registreren voor onze Mantelzorg applicatie</p>
<?php
$attributes = array('name' => 'mijnFormulier');
echo form_open('home/registreerGebruiker', $attributes);
?>
<table>
    <tr>
        <td><?php echo form_label('Voornaam:', 'voornaam'); ?></td>
        <td><?php echo form_input(array('name' => 'voornaam', 'id' => 'voornaam', 'size' => '30')); ?></td>
    </tr>

    <tr>
        <td><?php echo form_label('Naam:', 'naam'); ?></td>
        <td><?php echo form_input(array('name' => 'naam', 'id' => 'naam', 'size' => '30')); ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Geboortedatum:', 'geboortedatum'); ?>
        <td>
            <input size="16" type="text" value="01-09-1998" >

            <script type="text/javascript">
                $(".form_datetime").datetimepicker({format: 'dd-mm-yyyy'});
            </script>
        </td>

            </div>
        </td>
        </tr>
    <tr>
        <td><?php echo form_label('Woonplaats:', 'woonplaats'); ?></td>
        <td><?php echo form_input(array('name' => 'woonplaats', 'id' => 'woonplaats', 'size' => '30')); ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Adres:', 'adres'); ?></td>
        <td><?php echo form_input(array('name' => 'adres', 'id' => 'adres', 'size' => '30')); ?></td>
    </tr>

    <tr>
        <td><?php echo form_label('Rekeningnummer:', 'rekeningnummer'); ?></td>
        <td><?php echo form_input(array('name' => 'rekeningnummer', 'id' => 'rekeningnummer', 'size' => '30')); ?></td>
    </tr>

    <tr>
        <td><?php echo form_label('Gebruikersnaam:', 'gebruikersnaam'); ?></td>
        <td><?php echo form_input(array('name' => 'gebruikersnaam', 'id' => 'gebruikersnaam', 'size' => '30')); ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('E-mail:', 'email'); ?></td>
        <td><?php echo form_input(array('name' => 'email', 'id' => 'email', 'size' => '30')); ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Wachtwoord:', 'wachtwoord'); ?></td>
        <td><?php
            $data = array('name' => 'wachtwoord', 'id' => 'wachtwoord', 'size' => '30');
            echo form_password($data);
            ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo form_submit('knop', 'Verzenden'); ?></td>
    </tr>
</table>

<?php echo form_close(); ?>


<div class='col-12 mt-4'> <?php echo anchor('home', 'Terug'); ?> </div>


</p>