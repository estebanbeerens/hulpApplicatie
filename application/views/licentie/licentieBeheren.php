<?php

if($gebruiker->soortPersoonId == 1){
} else { redirect('home/meldaf'); } ?>

<?php
    /**
     * Ontwerper: Esteban
     */

    /**
     * @file licentieAankopen.php
     *
     * View waarin alle aan licenties getoond worden en deze geselecteerd kunnen worden voor verwijdering of bewerking.
     * - Krijgt een $licentie-object binnen
     * - Gebruikt Bootstrap cards
     */
?>
<p><?php echo anchor(base_url("assets/tutorials/Handleiding_licenties_beheren.pdf"), '<i class="fas fa-info-circle"></i> Hulp nodig?', 'target="_blank"')?></p>
<div class="row">

    <?php

    if($gebruiker->soortPersoonId == 1){

    } else{
        redirect('home/meldaf');
    }
    ?>
<?php
    /**
     * User: Esteban
     */
    foreach ($licentie as $item) {
        if ($item->prijs != 0) {
            $prijs = '€ ' . $item->prijs;
        }
        else {
            $prijs = 'Gratis';
        };

        echo '<div class="card m-2 col-md-4" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"> ' . $item->naam . ' </h5>
                <h6 class="card-subtitle mb-2 text-muted">' . $prijs . '</h6>
                <p class="card-text">'. $item->beschrijving . '</p>';
                echo anchor('licentie/licentieBewerken/' . $item->id, 'Bewerken');
                echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#licentieVerwijderen' . $item->id . '">Verwijderen</a>';
        echo '</div></div>';

        echo '<div class="modal fade" id="licentieVerwijderen' . $item->id . '" role="dialog">
                <div class="modal-dialog">
                    <!-- Inhoud dialoogvenster -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">' . $item->naam . ' verwijderen?</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Als u op OK drukt wordt de licentie ' . $item->naam . ' verwijderd. Iedereen die deze licentie gebruikt zal ook zonder licentie vallen.
                                <br>Bent u zeker dat u deze licentie wilt verwijderen?</p>
                        </div>
                        <div class="modal-footer">
                            '. anchor('Licentie/verwijderLicentie/' . $item->id, 'OK') . '
                            &nbsp;&nbsp;<a href="#" data-dismiss="modal">Annuleren</a>
                        </div>
                    </div>
                </div>
              </div>';
    }
?>
    <div class='col-12 mt-4'> <?php echo anchor('licentie/licentieToevoegen', 'Nieuwe licentie toevoegen', 'class="btn btn-primary"'); ?> </div>
</div>