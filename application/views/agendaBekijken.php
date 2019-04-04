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
                <th>Naam</th>
                <th>Id</th>
                <th>PersoonId</th>
                <th>EvenementId</th>
            </tr>
            <?php foreach ($personen as $persoon){ ?>
            <tr>

                <?php foreach ($persoon->persoonEvenement as $persoonEvenement){ ?>
                    <td><?php echo $persoon->naam . " " . $persoon->voornaam;?></td>
                <td><?php echo $persoonEvenement->id; ?></td>
                <td><?php echo $persoonEvenement->persoonId; ?></td>
                <td><?php echo $persoonEvenement->evenementId; ?></td>
                    </tr>
                <?php }?>
            <?php } ?>
        </table>
    </div>
</body>
</html>