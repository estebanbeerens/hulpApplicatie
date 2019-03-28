<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titel?></title>

</head>

<style>

    input[type=submit]{
         background-color: #007BFF;
         border: none;
         padding: 7px 10px;
         border-radius: 5px;
         color: white;
        cursor: pointer;
    }

    input[type=submit]:hover{
        background-color: #005efe;
    }

    .anchorBewerken{
        color: White;
        text-decoration: none;
    }
</style>

<body>
<div id="eventbeheren">


    <div class="eventbeheren">
        <table>
            <tr>
                <td>id</td>
                <td>Naam</td>
                <td>Datum</td>
                <td>Starttijd</td>
                <td>Eindtijd</td>
                <td>Locatie</td>
                <td>Beschrijving</td>
                <td></td>
            </tr>
            <?php foreach ($evenement as $item){ ?>
            <tr>
                <td><?php echo $item->id; ?></td>
                <td>

                        <?php echo anchor('evenement/evenementBewerken/' . $item->id, $item->naam, 'class="anchorBewerken btn btn-primary"'); ?>

                </td>
                <td><?php echo $item->datum; ?></td>
                <td><?php echo $item->startTijd; ?></td>
                <td><?php echo $item->eindTijd; ?></td>
                <td><?php echo $item->locatie; ?></td>
                <td><?php echo $item->beschrijving; ?></td>
                <td class="delete"><?php echo "<a href='evenementDeleten?id=".$item->id."'><i class=\"fas fa-trash-alt\"></i></a>"; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Evenement updaten</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $attributes = array('name' => 'evenementUpdatenFormulier');
                    echo form_open('evenement/evenementUpdaten', $attributes);
                    ?>
                    <table>

                        <tr>
                            <td><?php echo form_label('Id:', 'id'); ?></td>
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

                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <?php echo form_submit('knop', 'Save changes'); ?>
                </div>
            </div>
        </div>
    </div>





</div>



</body>
</html>