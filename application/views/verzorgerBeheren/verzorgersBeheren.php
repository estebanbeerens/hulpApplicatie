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

                        <?php echo anchor('verzorger/verzorgerBewerken/' . $item->id, $item->naam, 'class="anchorBewerken btn btn-primary"'); ?>

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

<!-- Popup beheren-->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Beheren
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Updaten</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>