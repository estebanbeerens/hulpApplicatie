<p>Test 2</p>

<select name="formPatient">
    <option value="">Select...</option>
    <?php foreach ($patient as $item){ ?>

    <option value="M"><?php echo $item->voornaam; ?></option>
    <?php } ?>

</select>
<?php var_dump($item); ?>

