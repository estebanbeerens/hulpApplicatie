<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titel; ?></title>

</head>



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

</div>



</body>
</html>