<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titel ?></title>
</head>
<body>
<div>

    <?php
    $attributes = array('name' => 'verzorgerToevoegenFormulier');
    echo form_open('verzorger/verzorgerToevoegen', $attributes);
    ?>
    <table>
        <th>Verzorger toevoegen</th>
        <tr>
            <td><?php echo form_label('Id:', 'id'); ?></td>
            <td><?php echo form_input(array('name' => 'id', 'id' => 'id', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Naam:', 'naam'); ?></td>
            <td><?php echo form_input(array('name' => 'naam', 'id' => 'naam', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Voornaam:', 'voornaam'); ?></td>
            <td><?php echo form_input(array('name' => 'voornaam', 'id' => 'voornaam', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('geboortedatum:', 'geboortedatum'); ?></td>
            <td><?php echo form_input(array('name' => 'geboortedatum', 'id' => 'geboortedatum', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('woonplaats:', 'woonplaats'); ?></td>
            <td><?php echo form_input(array('name' => 'woonplaats', 'id' => 'woonplaats', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('adres:', 'adres'); ?></td>
            <td><?php echo form_input(array('name' => 'adres', 'id' => 'adres', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('rekeningnummer', 'rekeningnummer'); ?></td>
            <td><?php echo form_input(array('name' => 'rekeningnummer', 'id' => 'rekeningnummer', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('gebruikersnaam:', 'gebruikersnaam'); ?></td>
            <td><?php echo form_input(array('name' => 'gebruikersnaam', 'id' => 'gebruikersnaam', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('passwoord', 'passwoord'); ?></td>
            <td><?php echo form_input(array('name' => 'passwoord', 'id' => 'passwoord', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('email:', 'email'); ?></td>
            <td><?php echo form_input(array('name' => 'email', 'id' => 'email', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo form_submit('knop', 'Verzenden'); ?></td>
        </tr>
    </table>

</div>

</body>
</html>