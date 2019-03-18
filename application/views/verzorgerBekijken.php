<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><? echo $titel?></title>
</head>
<body>

<?php foreach ($verzorger as $item){

    echo "<h3>"."Naam: " .$item->naam. " ". $item->voornaam."</h3>";
    echo "<p>"."Geboortedatum: " .$item->geboortedatum."</p>";
    echo "<p>"."Woonplaats: " .$item->woonplaats."</p>";
    echo "<p>"."Adres: " .$item->adres."</p>";
    echo "<p>"."Rekeningnummer: " .$item->rekeningnummer."</p>";
    echo "<p>"."Gebruikersnaam: " .$item->gebruikersnaam."</p>";
    echo "<p>"."passwoord: " .$item->passwoord."</p>";
    echo "<p>"."Email: " .$item->email."</p>";

}?>

</body>
</html>