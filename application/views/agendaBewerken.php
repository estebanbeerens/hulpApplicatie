<p>Selecteer patiënt:
    <select name="formPatient">
        <option value="">Select...</option>
        <?php foreach ($patient as $item){ ?>
            <option value = <?php echo $item->id; ?>><?php echo $item->naam . " " . $item->voornaam; ?></option>
        <?php } ?>

    </select>
</p>

<p>Selecteer evenement:
    <select name="formEvenement">
        <option value="">Select...</option>
        <?php foreach ($evenement as $item){ ?>
            <option value = <?php echo $item->id; ?>><?php echo $item->naam; ?></option>
        <?php } ?>

    </select>
</p>