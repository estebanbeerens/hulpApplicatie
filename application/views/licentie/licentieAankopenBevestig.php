<?php
    /**
     * Ontwerper: Esteban
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