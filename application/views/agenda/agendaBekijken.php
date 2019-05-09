<?php
/**
 * Ontwerper: René Vanhoof
 * Tester: ?
 *
 * @file agendaBekijken.php
 * View waarin de agenda weergeven wordt
 * - krijgt een $persoonEvenement object binnen
 */
?>
<div class="table-responsive">
    <table class="table">
        <tr>
            <th>Naam</th>
            <th>Evenement</th>
            <th>Datum</th>
            <th>Starttijd</th>
            <th>Eindtijd</th>
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
                    <td><?php echo $persoonEvenement->evenement->naam;?></td>
                    <td><?php echo $persoonEvenement->evenement->datum ?></td>
                    <td><?php echo $persoonEvenement->evenement->startTijd ?></td>
                    <td><?php echo $persoonEvenement->evenement->eindTijd ?></td>
                    <?php $teller++;
                }?>
            <?php }
            else
            {
                echo "<td>Geen evemenementen gevonden</td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";

            }
            echo "</tr>";
            }
            ?>
    </table>
</div>