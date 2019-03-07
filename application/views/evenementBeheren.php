<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titel ?></title>
</head>
<body>

<?php foreach ($evenement as $item){ ?>

    <form action="" method="post">
        <input type="text" name="naam" value="<?php echo $item->naam; ?>">
        <input type="text" name="naam" value="<?php echo $item->beschrijving; ?>">
        <input type="text" name="naam" value="<?php echo $item->startTijd; ?>">
        <input type="text" name="naam" value="<?php echo $item->eindTijd; ?>">
        <input type="text" name="naam" value="<?php echo $item->locatie; ?>">
        <input type="text" name="naam" value="<?php echo $item->meldingTijd; ?>">
        <input type="text" name="naam" value="<?php echo $item->verplicht; ?>">
        <input type="text" name="naam" value="<?php echo $item->isHerhaling; ?>">
        <button type="submit">Submit</button>
    </form>

<?php } ?>
</body>
</html>