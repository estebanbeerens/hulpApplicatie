<h1>Welkom op de registreer pagina</h1>
<p>In deze pagina kan je je registreren voor onze Mantelzorg applicatie</p>
<?php
$attributes = array('name' => 'mijnFormulier');
echo form_open('home/registreerGebruiker', $attributes);
?>
<table>
    <tr>
        <td><?php echo form_label('Naam:', 'naam'); ?></td>
        <td><?php echo form_input(array('name' => 'naam', 'id' => 'naam', 'size' => '30')); ?></td>
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