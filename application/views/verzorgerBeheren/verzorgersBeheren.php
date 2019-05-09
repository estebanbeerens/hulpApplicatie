<?php
/**
 * @file verzorgersBeheren.php
 *
 * View waarin de verzorgers worden weergegeven en aangepast kunnen worden
 * - krijgt een $verzorger-object binnen
 *
 *
*/
?>


<div>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Bewerken</th>
                <th>Naam</th>
                <th>Voornaam</th>
                <th>Geboortedatum</th>
                <th>Woonplaats</th>
                <th>Adres</th>
                <th>Gebruikersnaam</th>
                <th>Email</th>
                <th>Verwijderen</th>
            </tr>
            <?php foreach ($verzorger as $item){ ?>
                <tr>
                    <td><?php echo anchor('verzorger/verzorgerBewerken/' . $item->id, '<i class="fas fa-edit"></i>', 'class="anchorBewerken1 btn btn-primary" data-toggle="tooltip"'); ?></td>
                    <td><?php echo $item->naam; ?></td>
                    <td><?php echo $item->voornaam; ?></td>
                    <td><?php echo $item->geboortedatum; ?></td>
                    <td><?php echo $item->woonplaats; ?></td>
                    <td><?php echo $item->adres; ?></td>
                    <td><?php echo $item->gebruikersnaam; ?></td>
                    <td><?php echo $item->email; ?></td>
                    <td class="delete text-center"><?php echo "<a href='verzorgerDeleten?id=".$item->id."'><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Deze verzorger verwijderen\"></i></a>"; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <?php echo anchor('verzorger/verzorgerViewLaden', 'Verzorger toevoegen',  'class="anchorBewerken2 btn btn-primary eventToevoegen"'); ?>
</div>