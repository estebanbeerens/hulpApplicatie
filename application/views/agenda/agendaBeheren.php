<?php
if($gebruiker->soortPersoonId == 2 || $gebruiker->soortPersoonId == 3){
} else{ redirect('home/meldaf'); } ?>

<?php
/**
* Ontwerper: René Vanhoof
* Tester: ?
 *
 * @file agendaBeheren.php
 * View waarin de agenda's weergeven en aangepast kunnen worden
 * - krijgt een $persoonEvenement-object binnen
 *
*/
?>
<div class="table-responsive">
    <table class="table">
        <tr>
            <th>Naam</th>
            <th>Bewerken</th>
            <th>Evenement</th>
            <th>Datum</th>
            <th>Starttijd</th>
            <th>Eindtijd</th>
            <th>Verwijderen</th>
        </tr>
        <?php foreach ($personen as $persoon){ ?>
        <tr>

            <td><?php
                $teller = 0;
                echo $persoon->naam . " " . $persoon->voornaam;?></td>

            <?php

            if(count($persoon->persoonEvenementen > 0))
            {

                foreach ($persoon->persoonEvenementen as $persoonEvenement){ ?>
                    <?php
                    if($teller > 0)
                    {
                        echo "</tr><tr><td></td>";

                    }
                    ?>
                    <td>
                        <?php echo anchor('persoonEvenement/persoonEvenementBewerken/' . $persoonEvenement->id, "<i class=\"fas fa-edit\"></i>", 'class="anchorBewerken btn btn-primary"'); ?>
                    </td>
                    <td><?php echo $persoonEvenement->evenement->naam;?></td>
                    <?php $teller++;
                    ?>
                    <td><?php echo $persoonEvenement->evenement->datum ?></td>
                    <td><?php echo $persoonEvenement->evenement->startTijd ?></td>
                    <td><?php echo $persoonEvenement->evenement->eindTijd ?></td>

                    <td class="delete text-center"><?php echo "<a href='persoonEvenementDeleten?id=".$persoonEvenement->id."'><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Dit evenement verwijderen\"></i></a>"; ?></td>
                    <?php
                }?>
            <?php }
            else
            {
                echo "<td>Geen evemenementen gevonden</td>";
            }
            echo "</tr>";
            }
            ?>
    </table>
    <?php echo anchor('persoonEvenement/persoonEvenementViewLaden', 'Agenda toevoegen',  'class="anchorBewerken2 btn btn-primary"'); ?>
</div>