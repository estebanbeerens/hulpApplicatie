<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titel?></title>

</head>

<style>

    input[type=submit]{
        background-color: #007BFF;
        border: none;
        padding: 7px 10px;
        border-radius: 5px;
        color: white;
        cursor: pointer;
    }

    input[type=submit]:hover{
        background-color: #005efe;
    }

    .anchorBewerken{
        color: White;
        text-decoration: none;
    }
</style>

<body>
<div>
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
                <th>gebruikersnaam</th>
                <th>wachtwoord</th>
                <th>email</th>
            </tr>
            <?php foreach ($verzorger as $item){ ?>
                <tr>
                    <td><?php echo $item->id; ?></td>
                    <td>

                        <?php echo anchor('verzorger/verzorgerBewerken/' . $item->id, $item->naam, 'class="anchorBewerken1 btn btn-primary"'); ?>

                    </td>
                    <td><?php echo $item->voornaam; ?></td>
                    <td><?php echo $item->geboortedatum; ?></td>
                    <td><?php echo $item->woonplaats; ?></td>
                    <td><?php echo $item->adres; ?></td>
                    <td><?php echo $item->rekeningnummer; ?></td>
                    <td><?php echo $item->gebruikersnaam; ?></td>
                    <td><?php echo $item->passwoord; ?></td>
                    <td><?php echo $item->email; ?></td>
                    <td class="delete"><?php echo "<a href='verzorgerDeleten?id=".$item->id."'><i class=\"fas fa-trash-alt\"></i></a>"; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <?php echo anchor('verzorger/verzorgerViewLaden', 'Verzorger toevoegen',  'class="anchorBewerken2 btn btn-primary eventToevoegen"'); ?>



</div>
</body>
</html>