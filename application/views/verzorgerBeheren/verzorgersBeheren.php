<div>
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
                <th>wachtwoord</th>
                <th>email</th>
            </tr>
            <?php foreach ($verzorger as $item){ ?>
                <tr>
                    <td><?php echo anchor('verzorger/verzorgerBewerken/' . $item->id, 'Bewerken', 'class="anchorBewerken1 btn btn-primary" data-toggle="tooltip"'); ?></td>
                    <td><?php echo $item->naam; ?></td>
                    <td><?php echo $item->voornaam; ?></td>
                    <td><?php echo $item->geboortedatum; ?></td>
                    <td><?php echo $item->woonplaats; ?></td>
                    <td><?php echo $item->adres; ?></td>
                    <td><?php echo $item->gebruikersnaam; ?></td>
                    <td><?php echo $item->passwoord; ?></td>
                    <td><?php echo $item->email; ?></td>
                    <td class="delete"><?php echo "<a href='verzorgerDeleten?id=".$item->id."'><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Deze verzorger verwijderen\"></i></a>"; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <?php echo anchor('verzorger/verzorgerViewLaden', 'Verzorger toevoegen',  'class="anchorBewerken2 btn btn-primary eventToevoegen"'); ?>
</div>