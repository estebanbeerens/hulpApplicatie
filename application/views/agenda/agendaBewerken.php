<?php
/**
 * Ontwerper: René Vanhoof
 * Tester: ?
 */
?>
<?php
$evenementOpties=array();

foreach ($evenement as $item) {
    $evenementOpties[$item->id] = $item->naam;
}
foreach ($patient as $item) {
    $patientOpties[$item->id] = $item->naam . " " . $item->voornaam;
}
?>

<?php
$agendaBewerkenFormulier = array('id' => 'agendaBewerkenFormulier', 'novalidate' => 'novalidate', 'class' => 'needs-validation');
echo form_open('PersoonEvenement/persoonEvenementUpdaten/'. $persoonEvenement , $agendaBewerkenFormulier);


?>
<p>Patient veranderen naar:

    <?php echo form_dropdown('persoonId', $patientOpties, '0');?>
</p>
<p>Evenement veranderen naar:

    <?php echo form_dropdown('evenementId', $evenementOpties, '0');?>

</p>



<?php echo form_submit('knop', 'Opslaan', "class='btn btn-primary' data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Agenda aanpassen\"") ?>
<?php echo form_close(); ?>
<div class='col-12 mt-4'> <?php echo anchor('persoonEvenement/beheerPersoonEvenementPatient', 'Terug'); ?> </div>
