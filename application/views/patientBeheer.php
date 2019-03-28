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
            <th>Beheer</th>
            <th>Id</th>
            <th>Naam</th>
            <th>Voornaam</th>
            <th>geboortedatum</th>
            <th>woonplaats</th>
            <th>adres</th>

            <th>gebruikersnaam</th>
            
            <th>email</th>
            <th></th>
        </tr>
        <?php foreach ($patient as $item){ ?>
            <tr>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="<?php echo $item->id; ?>" onclick="showDetails(this);">
                        <?php echo "Beheer" ?>
                    </button></td>
                <td><?php echo $item->id; ?></td>
                <td><?php echo $item->naam; ?></td>
                <td><?php echo $item->voornaam; ?></td>
                <td><?php echo $item->geboortedatum; ?></td>
                <td><?php echo $item->woonplaats; ?></td>
                <td><?php echo $item->adres; ?></td>

                <td><?php echo $item->gebruikersnaam; ?></td>

                <td><?php echo $item->email; ?></td>
                <td class="delete"><?php echo "<a href='patientVerwijderen?id=".$item->id."'><i class=\"fas fa-trash-alt\"></i></a>"; ?></td>
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
            <div class="modal-body">
                <?php
                $attributes = array('name' => 'patientUpdateFormulier');
                echo form_open('patient/patientupdaten', $attributes);
                ?>
                <table>
                    <th>Patiënt updaten</th>
                    <tr>
                        <td><?php echo form_label('Id:', 'id'); ?></td>
                        <td><?php echo form_input(array('name' => 'id', 'id' => 'id', 'size' => '30', 'value' => '')); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('Naam:', 'naam'); ?></td>
                        <td><?php echo form_input(array('name' => 'naam', 'id' => 'naam', 'size' => '30', 'value' => '')); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('Voornaam:', 'voornaam'); ?></td>
                        <td><?php echo form_input(array('name' => 'voornaam', 'id' => 'voornaam', 'size' => '30', 'value' => '')); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('geboortedatum:', 'geboortedatum'); ?></td>
                        <td><?php echo form_input(array('name' => 'geboortedatum', 'id' => 'geboortedatum', 'size' => '30', 'value' => '')); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('woonplaats:', 'woonplaats'); ?></td>
                        <td><?php echo form_input(array('name' => 'woonplaats', 'id' => 'woonplaats', 'size' => '30', 'value' => '')); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('adres:', 'adres'); ?></td>
                        <td><?php echo form_input(array('name' => 'adres', 'id' => 'adres', 'size' => '30', 'value' => '')); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('rekeningnummer', 'rekeningnummer'); ?></td>
                        <td><?php echo form_input(array('name' => 'rekeningnummer', 'id' => 'rekeningnummer', 'size' => '30', 'value' => '')); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('gebruikersnaam:', 'gebruikersnaam'); ?></td>
                        <td><?php echo form_input(array('name' => 'gebruikersnaam', 'id' => 'gebruikersnaam', 'size' => '30', 'value' => '')); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('passwoord', 'passwoord'); ?></td>
                        <td><?php echo form_input(array('name' => 'passwoord', 'id' => 'passwoord', 'size' => '30', 'value' => '')); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('email:', 'email'); ?></td>
                        <td><?php echo form_input(array('name' => 'email', 'id' => 'email', 'size' => '30', 'value' => '')); ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo form_submit('knop', 'Verzenden'); ?></td>
                    </tr>
                </table>




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
