<h1><? echo $titel ?></h1>
<?
    foreach ($licentie as $licenties) {
        if ($licentie->prijs != 0) {
            $prijs = $licentie->prijs;
        }
        else {
            $prijs = 'Gratis';
        };

        echo '<div class="card m-2" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"> ' . $licentie->naam . ' </h5>
                <h6 class="card-subtitle mb-2 text-muted">€ ' . $prijs . '</h6>
                <p class="card-text">'. $licentie->beschrijving . '</p>
                <a href="#" class="card-link">Aankopen</a>
              </div>
          </div>';
    }
?>