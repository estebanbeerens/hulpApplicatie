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
<?php foreach ($patient as $item){
    echo "<p>".$item->naam."</p>";
    echo "<p>".$item->voornaam."</p>";
    echo "<p>".$item->geboortedatum."</p>";
    echo "<p>".$item->woonplaats."</p>";
    echo "<p>".$item->adres."</p>";
    echo "<p>".$item->rekeningnummer."</p>";
    echo "<p>".$item->gebruikersnaam."</p>";
    echo "<p>".$item->password."</p>";
    echo "<p>".$item->email."</p>";
}
?>
</body>
