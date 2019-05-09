<?php

if($gebruiker->soortPersoonId == 1){
} else { redirect('home/meldaf'); } ?>

<?php
    /**
     * Ontwerper: Esteban
     */

    /**
     * @file licentieAankopenBevestig.php
     *
     * View waarin een soort laadscherm getoond word. Hier wordt gewacht to de transactie voltooid wordt. Dit word nu nog gesimuleerd met 2 knoppen.
     * - Krijgt een $licentie-object binnen
     * - Gebruikt een custom CSS file loader.css
     */
    echo pasStylesheetAan('loader.css');
?>

<div class="text-center">
    <h4 class="mt-4"><?php echo $licentie->naam . ' - € ' . $licentie->prijs?></h4>
    <div class="spinner mt-5">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
    <p class="text-secondary mt-3">Wachten tot de transactie voltooid is...</p>

    <div class='col-12 mt-4'> <?php echo anchor('licentie/licentieAankopenOk/' . $licentie->id, 'Transactie voltooien'); ?> </div>

    <div class='col-12 mt-3'> <?php echo anchor('licentie/licentieAankopen', 'Transactie afbreken'); ?> </div>
</div>