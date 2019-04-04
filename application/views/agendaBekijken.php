<div class="table-responsive">
    <table class="table">
        <tr>
            <th>Naam</th>
            <th>Evenement</th>
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
                    <?php $teller++;
                }?>
            <?php }
            else
            {
                echo "<td></td>";
            }
            echo "</tr>";
            }
            ?>
    </table>
</div>