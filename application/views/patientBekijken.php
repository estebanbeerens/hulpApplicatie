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
<div class="table-responsive">
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Naam</th>
            <th>Voornaam</th>
            <th>geboortedatum</th>
            <th>woonplaats</th>
            <th>adres</th>
            <th>rekeningnummer</th>
            <th>wachtwoord</th>
            <th>email</th>
        </tr>
        <?php foreach ($patient as $item){ ?>
            <tr>
                <td><?php echo $item->id; ?></td>
                <td><?php echo $item->naam; ?></td>
                <td><?php echo $item->voornaam; ?></td>
                <td><?php echo $item->geboortedatum; ?></td>
                <td><?php echo $item->woonplaats; ?></td>
                <td><?php echo $item->adres; ?></td>
                <td><?php echo $item->rekeningnummer; ?></td>
                <td><?php echo $item->gebruikersnaam; ?></td>
                <td><?php echo $item->passwoord; ?></td>
                <td><?php echo $item->email; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
