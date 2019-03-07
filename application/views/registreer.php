<h1>Welkom op de registreer pagina</h1>
<p>In deze pagina kan je je registreren voor onze Mantelzorg applicatie</p>
<?php
$attributes = array('name' => 'mijnFormulier');
echo form_open('home/registreerGebruiker', $attributes);
?>
<table>
    <tr>
        <td><?php echo form_label('Naam:', 'email'); ?></td>
        <td><?php echo form_input(array('name' => 'gebruikersnaam', 'id' => 'gebruikersnaam', 'size' => '30')); ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Voornaam:', 'email'); ?></td>
        <td><?php echo form_input(array('name' => 'gebruikersnaam', 'id' => 'gebruikersnaam', 'size' => '30')); ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Straat:', 'email'); ?></td>
        <td><?php echo form_input(array('name' => 'gebruikersnaam', 'id' => 'gebruikersnaam', 'size' => '30')); ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Gemeente:', 'gemeente'); ?></td>
        <td><?php echo form_input(array('name' => 'Gemeente', 'id' => 'Gemeente', 'size' => '30')); ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Huisnummer:', 'email'); ?></td>
        <td><?php echo form_input(array('name' => 'gebruikersnaam', 'id' => 'huisnummer', 'size' => '30')); ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('email:', 'email'); ?></td>
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