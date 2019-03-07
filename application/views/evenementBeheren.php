<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titel?></title>

</head>
<body>
<div id="eventbeheren">
<?php foreach ($evenement as $item){ ?>

    <form action="<?php echo ""; ?>" method="post">
        <input style="display: none;" type="tel" name="id" value="<?php echo $item->id; ?>">
        <label for="naam">Naam</label>
        <input type="text" name="naam" value="<?php echo $item->naam; ?>">
        <label for="beschrijving">Beschrijving</label>
        <input type="text" name="beschrijving" value="<?php echo $item->beschrijving; ?>">
        <label for="startTijd">Starttijd</label>
        <input type="text" name="startTijd" value="<?php echo $item->startTijd; ?>">
        <label for="eindTijd">Eindtijd</label>
        <input type="text" name="eindTijd" value="<?php echo $item->eindTijd; ?>">
        <label for="locatie">Locatie</label>
        <input type="text" name="locatie" value="<?php echo $item->locatie; ?>">
        <label for="meldingTijd">Meldingtijd</label>
        <input type="text" name="meldingTijd" value="<?php echo $item->meldingTijd; ?>">
        <label for="verplicht">Verplicht</label>
        <input type="text" name="verplicht" value="<?php echo $item->verplicht; ?>">
        <label for="isHerhaling">Herhaling?</label>
        <input type="text" name="isHerhaling" value="<?php echo $item->isHerhaling; ?>">
        <button type="submit">Submit</button>
    </form>

<?php } ?>
</div>
</body>
</html>