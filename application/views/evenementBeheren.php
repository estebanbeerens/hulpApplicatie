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
    </form>


    echo "<h3>".$item->naam."</h3>";
    echo "<p>".$item->beschrijving."</p>";
    echo "<p>"."Het evenement start om: ".$item->startTijd." en eindigt om ". $item->eindTijd."</p>";
    echo "<p>"."Locatie: ".$item->locatie."</p>";

<?php } ?>
</body>
</html>