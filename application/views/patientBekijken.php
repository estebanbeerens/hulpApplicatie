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
    echo "<p>"."Id: " .$item->id."</p>";
    echo "<p>"."Naam: " .$item->naam."</p>";
    echo "<p>"."Voornaam: " .$item->voornaam."</p>";
    echo "<p>"."Geboortedatum: " .$item->geboortedatum."</p>";
    echo "<p>"."Woonplaats: " .$item->woonplaats."</p>";
    echo "<p>"."Adres: " .$item->adres."</p>";
    echo "<p>"."Rekeningnummer: " .$item->rekeningnummer."</p>";
    echo "<p>"."Gebruikersnaam: " .$item->gebruikersnaam."</p>";
    echo "<p>"."Email: " .$item->email."</p>";
}
?>
</body>
