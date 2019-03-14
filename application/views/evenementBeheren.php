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
<div id="eventbeheren">
<?php foreach ($evenement as $item){ ?>


<div>
    <?php
    $attributes = array('name' => 'mijnFormulier');
    echo form_open('Evenement/evenementUpdaten', $attributes);
    ?>
    <table>
        <th>Evenement wijzigen</th>
        <tr>
            <td><?php echo form_label('id:', 'id'); ?></td>
            <td><?php echo form_input(array('name' => 'id', 'id' => 'id', 'size' => '30', 'value' => $item->id)); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Naam:', 'naam'); ?></td>
            <td><?php echo form_input(array('name' => 'naam', 'id' => 'naam', 'size' => '30', 'value' => $item->naam)); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Meldingtijd:', 'meldingtijd'); ?></td>
            <td><?php echo form_input(array('name' => 'meldingtijd', 'id' => 'meldingtijd', 'size' => '30', 'value' => $item->meldingTijd)); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Beschrijving:', 'beschrijving'); ?></td>
            <td><?php echo form_input(array('name' => 'beschrijving', 'id' => 'beschrijving', 'size' => '30', 'value' => $item->beschrijving)); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Locatie:', 'locatie'); ?></td>
            <td><?php echo form_input(array('name' => 'locatie', 'id' => 'locatie', 'size' => '30', 'value' => $item->locatie)); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Verplicht:', 'verplicht'); ?></td>
            <td><?php echo form_input(array('name' => 'verplicht', 'id' => 'verplicht', 'size' => '30', 'value' => $item->verplicht)); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Herhaling?', 'herhaling'); ?></td>
            <td><?php echo form_input(array('name' => 'herhaling', 'id' => 'herhaling', 'size' => '30', 'value' => $item->isHerhaling)); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Datum:', 'datum'); ?></td>
            <td><?php echo form_input(array('name' => 'datum', 'id' => 'datum', 'size' => '30', 'value' => $item->datum)); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Starttijd:', 'starttijd'); ?></td>
            <td><?php echo form_input(array('name' => 'starttijd', 'id' => 'starttijd', 'size' => '30', 'value' => $item->startTijd)); ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Eindtijd:', 'eindtijd'); ?></td>
            <td><?php echo form_input(array('name' => 'eindtijd', 'id' => 'eindtijd', 'size' => '30', 'value' => $item->eindTijd)); ?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo form_submit('knop', 'Verzenden'); ?></td>
        </tr>
    </table>
</div>

<?php } ?>

<<<<<<< HEAD



=======
>>>>>>> evenement toevoegen afwerking
    <div>
        <?php
        $attributes = array('name' => 'evenementToevoegenFormulier');
        echo form_open('evenement/evenementToevoegen', $attributes);
        ?>
        <table>
            <th>Evenement toevoegen</th>
            <tr>
                <td><?php echo form_label('id:', 'id'); ?></td>
                <td><?php echo form_input(array('name' => 'id', 'id' => 'id', 'size' => '30', 'value' => '')); ?></td>
            </tr>
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
<div>
    <br>
    <br>

<!--    De footer staat voor de knop waardoor je niet kan verzenden -->
</div>

</div>
</body>
</html>