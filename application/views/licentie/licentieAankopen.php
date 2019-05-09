<?php
    /**
     * @file licentieAankopen.php
     *
     * View waarin alle aan te kopen licenties getoond worden.
     * - Krijgt een $licentie-object binnen
     * - Gebruikt Bootstrap cards
     */
?>

<?php

if($gebruiker->soortPersoonId == 2 || $gebruiker->soortPersoonId == 3){

} else{
    redirect('home/meldaf');
}
?>

<div class="row">
<?php
    /**
     * Ontwerper: Esteban
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
                echo anchor('licentie/licentieAankopenBevestig/' . $item->id, 'Kopen');
                echo '
              </div>
          </div>';
    }
?>
    <div class='col-12 mt-4'> <?php echo anchor('home', 'Terug'); ?> </div>
</div>