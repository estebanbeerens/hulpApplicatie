<div class="table-responsive">
        <table class="table">
            <tr>
                <th class="text-center"><i class="fas fa-edit"></i></th>
                <th>Naam</th>
                <th>Datum</th>
                <th>Starttijd</th>
                <th>Eindtijd</th>
                <th>Locatie</th>
                <th>Beschrijving</th>
                <th class="text-center"><i class="fas fa-trash-alt"></i></th>
            </tr>
            <?php foreach ($evenement as $item){ ?>
            <tr>
                <td><?php echo anchor('evenement/evenementBewerken/' . $item->id, 'Bewerken', 'class="anchorBewerken1 btn btn-primary"'); ?></td>
                <td><?php echo $item->naam; ?></td>
                <td><?php echo $item->datum; ?></td>
                <td><?php echo $item->startTijd; ?></td>
                <td><?php echo $item->eindTijd; ?></td>
                <td><?php echo $item->locatie; ?></td>
                <td><?php echo $item->beschrijving; ?></td>
                <td class="delete"><?php echo "<a href='evenementDeleten?id=".$item->id."'><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Dit evenement verwijderen\"></i></a>"; ?></td>
            </tr>
            <?php } ?>
        </table>
        <?php echo anchor('evenement/evenementToevoegen', 'Evenement toevoegen',  'class="anchorBewerken2 btn btn-primary eventToevoegen"'); ?>

</div>


