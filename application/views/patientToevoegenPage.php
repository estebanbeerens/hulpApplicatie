<div>
    <?php
    $attributes = array('name' => 'patientToevoegenFormulier' ,'novalidate' => 'novalidate', 'class' => 'needs-validation');
    echo form_open('patient/patientToevoegen', $attributes);
    echo $titel;
    ?>

        <div class="form-group col-md-7">
            <?php
            echo form_label('Naam', 'naam');

            $naam = array('id' => 'naam',
                'name' => 'naam',
                'class' => 'form-control',
                'placeholder' => 'naam',
                'required' => 'required');
            echo form_input($naam) . "\n";
            ?>
            <div class="invalid-feedback">Geef een naam op.</div>
        </div>
        <div class="form-group col-md-7">
            <?php
            echo form_label('voornaam', 'voornaam');

            $voornaam = array('id' => 'voornaam',
                'name' => 'voornaam',
                'class' => 'form-control',
                'placeholder' => 'voornaam',
                'required' => 'required');
            echo form_input($voornaam) . "\n";
            ?>
            <div class="invalid-feedback">Geef een voornaam op.</div>
        </div>
        <div class="form-group col-md-7">
            <?php
            echo form_label('geboortedatum', 'geboortedatum');

            $geboortedatum = array('id' => 'geboortedatum',
                'name' => 'geboortedatum',
                'class' => 'form-control',
                'placeholder' => '1998-09-01',
                'required' => 'required');
            echo form_input($geboortedatum) . "\n";
            ?>
            <div class="invalid-feedback">Geef een geboortedatum op.</div>
        </div>
        <div class="form-group col-md-7">
            <?php
            echo form_label('woonplaats', 'woonplaats');

            $woonplaats = array('id' => 'woonplaats',
                'name' => 'woonplaats',
                'class' => 'form-control',
                'placeholder' => 'woonplaats',
                'required' => 'required');
            echo form_input($woonplaats) . "\n";
            ?>
            <div class="invalid-feedback">Geef een geboortedatum op.</div>
        </div>
        <div class="form-group col-md-7">
            <?php
            echo form_label('adres', 'adres');

            $adres = array('id' => 'adres',
                'name' => 'adres',
                'class' => 'form-control',
                'placeholder' => 'adres',
                'required' => 'required');
            echo form_input($adres) . "\n";
            ?>
            <div class="invalid-feedback">Geef een adres op.</div>
        </div>

        <div class="form-group col-md-7">
            <?php
            echo form_label('gebruikersnaam', 'gebruikersnaam');

            $gebruikersnaam = array('id' => 'gebruikersnaam',
                'name' => 'gebruikersnaam',
                'class' => 'form-control',
                'placeholder' => 'gebruikersnaam',
                'required' => 'required');
            echo form_input($gebruikersnaam) . "\n";
            ?>
            <div class="invalid-feedback">Geef een gebruikersnaam op.</div>
        </div>
        <div class="form-group col-md-7">
            <?php
            echo form_label('passwoord', 'passwoord');

            $passwoord = array('id' => 'passwoord',
                'name' => 'passwoord',
                'class' => 'form-control',
                'placeholder' => 'passwoord',
                'required' => 'required');
            echo form_input($passwoord) . "\n";
            ?>
            <div class="invalid-feedback">Geef een passwoord op.</div>
        </div>
        <div class="form-group col-md-7">
            <?php
            echo form_label('email', 'email');

            $email = array('id' => 'email',
                'name' => 'email',
                'class' => 'form-control',
                'placeholder' => 'email',
                'required' => 'required');
            echo form_input($email) . "\n";
            ?>
            <div class="invalid-feedback">Geef een email op.</div>
        </div>
    <?php echo form_submit('knop', 'Verzenden', "class='btn btn-primary'") ?>



        <tr>
            <td></td>

        </tr>
    </table>
</div>