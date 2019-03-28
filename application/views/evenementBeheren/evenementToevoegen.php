<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titel?></title>
</head>
<body>
<div>
    <?php
    $attributes = array('name' => 'evenementToevoegenFormulier');
    echo form_open('evenement/evenementToevoegenGoed', $attributes);
    ?>
    <table>
        <th>Evenement toevoegen</th>
        <tr>
            <td><?php echo form_label('Naam:', 'naam'); ?></td>
            <td><?php echo form_input(array('name' => 'naam', 'id' => 'naam', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Meldingtijd:', 'meldingtijd'); ?></td>
            <td><?php echo form_input(array('name' => 'meldingtijd', 'id' => 'meldingtijd', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Beschrijving:', 'beschrijving'); ?></td>
            <td><?php echo form_input(array('name' => 'beschrijving', 'id' => 'beschrijving', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Locatie:', 'locatie'); ?></td>
            <td><?php echo form_input(array('name' => 'locatie', 'id' => 'locatie', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Verplicht:', 'verplicht'); ?></td>
            <td><?php echo form_input(array('name' => 'verplicht', 'id' => 'verplicht', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Herhaling?', 'herhaling'); ?></td>
            <td><?php echo form_input(array('name' => 'herhaling', 'id' => 'herhaling', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Datum:', 'datum'); ?></td>
            <td><?php echo form_input(array('name' => 'datum', 'id' => 'datum', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Starttijd:', 'starttijd'); ?></td>
            <td><?php echo form_input(array('name' => 'starttijd', 'id' => 'starttijd', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Eindtijd:', 'eindtijd'); ?></td>
            <td><?php echo form_input(array('name' => 'eindtijd', 'id' => 'eindtijd', 'size' => '30', 'value' => '')); ?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo form_submit('knop', 'Verzenden'); ?></td>
        </tr>
    </table>
</div>

</body>
</html>