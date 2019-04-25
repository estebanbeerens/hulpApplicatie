<?php
$persoonEvenementToevoegenFormulier = array('id' => 'persoonEvenementFormulier', 'novalidate' => 'novalidate', 'class' => 'needs-validation');
echo form_open('persoonEvenement/persoonEvenementToevoegen/' , $persoonEvenementToevoegenFormulier);

?>
<p>Selecteer patiënt:
<select name="formPatient">
    <?php foreach ($patient as $item){ ?>
        <option value = <?php echo $item->id; ?>><?php echo $item->naam . " " . $item->voornaam; ?></option>
    <?php } ?>

</select>
</p>

<p>Selecteer evenement:
    <select name="formEvenement">
        <?php foreach ($evenement as $item){ ?>
            <option value = <?php echo $item->id; ?>><?php echo $item->naam; ?></option>
        <?php } ?>

    </select>
</p>
<?php echo form_submit('knop', 'Toevoegen', "class='btn btn-primary' data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Agenda toevoegen\"") ?>
<?php echo form_close(); ?>

