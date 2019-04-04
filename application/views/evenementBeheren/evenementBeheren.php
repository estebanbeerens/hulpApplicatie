<div id="eventbeheren">
    <div class="eventbeheren table-responsive">
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

                        <?php echo anchor('evenement/evenementBewerken/' . $item->id, $item->naam, 'class="anchorBewerken1 btn btn-primary"'); ?>

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
        <?php echo anchor('evenement/evenementToevoegen', 'Evenement toevoegen',  'class="anchorBewerken2 btn btn-primary eventToevoegen"'); ?>

    </div>

</div>