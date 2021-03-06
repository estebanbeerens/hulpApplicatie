<?php
/**
 * @file patientBeheer.php
 * View waarin patiënten worden weergeven en aangepast kunnen worden
 * - krijgt een $patient-object binnen
 */
?>



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

<?php

if($gebruiker->soortPersoonId == 2){
} else { redirect('home/meldaf'); } ?>


<div class="table-responsive">
    <table class="table">
        <tr>
            <th class="text-center"><i class="fas fa-edit"></i></th>
            <th>Naam</th>
            <th>Voornaam</th>
            <th>geboortedatum</th>
            <th>woonplaats</th>
            <th>adres</th>

            <th>gebruikersnaam</th>

            <th>email</th>
            <th></th>
        </tr>
        <?php foreach ($patient as $item){ ?>
            <tr>
                <td>
                    <?php echo anchor('patient/patientBewerken/' . $item->id, 'Bewerken', 'class="anchorBewerken btn btn-primary"'); ?>
                </td>
                <td><?php echo $item->naam; ?></td>
                <td><?php echo $item->voornaam; ?></td>
                <td><?php echo $item->geboortedatum; ?></td>
                <td><?php echo $item->woonplaats; ?></td>
                <td><?php echo $item->adres; ?></td>

                <td><?php echo $item->gebruikersnaam; ?></td>

                <td><?php echo $item->email; ?></td>
                <td class="delete"><?php echo "<a href='patientVerwijderen?id=".$item->id."'><i class=\"fas fa-trash-alt\"></i></a>"; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>




<!-- Modal -->


        </div>
    </div>
</div>

</div>

</body>
