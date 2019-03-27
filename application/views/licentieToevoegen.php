<h1><?php echo $titel ?></h1>

<?php
    /**
     * User: Esteban
     */
?>

<form action="">
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="licentieNaam">Naam</label>
            <input class="form-control" id="licentieNaam" placeholder="Naam van de licentie">
            <div class="invalid-feedback">
                Geef een naam op.
            </div>
        </div>
        <div class="form-group col-md-2">
            <label for="licentiePrijs">Prijs</label>
            <input type="number" class="form-control" id="licentiePrijs" placeholder="€">
            <div class="invalid-feedback">
                Geef een prijs op.
            </div>
        </div>
        <div class="form-group col-md-10">
            <label for="licentieBeschrijving">Beschrijving</label>
            <textarea class="form-control" rows="5" id="licentieBeschrijving" placeholder="Beschrijving"></textarea>
            <div class="invalid-feedback">
                Geef een beschrijving op.
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Toevoegen</button
</form>
