<h1><?php echo $titel ?></h1>
<div class="row">
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
                <p class="card-text">'. $item->beschrijving . '</p>
                <a href="#" class="card-link">Aankopen</a>
              </div>
          </div>';
    }
?>
</div>