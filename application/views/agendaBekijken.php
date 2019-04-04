<div class="table-responsive">
    <table class="table">
        <tr>
            <th>Naam</th>
            <th>Id</th>
            <th>PersoonId</th>
            <th>EvenementId</th>
        </tr>
        <?php foreach ($personen as $persoon){ ?>
        <tr>

            <?php foreach ($persoon->persoonEvenement as $persoonEvenement){ ?>
                <td><?php echo $persoon->naam . " " . $persoon->voornaam;?></td>
            <td><?php echo $persoonEvenement->id; ?></td>
            <td><?php echo $persoonEvenement->persoonId; ?></td>
            <td><?php echo $persoonEvenement->evenementId; ?></td>
                </tr>
            <?php }?>
        <?php } ?>
    </table>
</div>