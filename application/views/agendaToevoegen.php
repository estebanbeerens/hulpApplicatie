<?php
$evenementOpties=array();
$evenementOpties[0] = '-- Select --';
foreach ($evenement as $item) {
    $evenementOpties[$item->id] = $item->naam;
}
$patientOpties=array();
$patientOpties[0] = '-- Select --';
foreach ($patient as $item) {
    $patientOpties[$item->id] = $item->naam . " " . $item->voornaam;
}
?>

<?php
$agendaToevoegenFormulier = array('id' => 'agendaToevoegenFormulier', 'novalidate' => 'novalidate', 'class' => 'needs-validation');
echo form_open('persoonEvenement/persoonEvenementToevoegen/' , $agendaToevoegenFormulier);


?>

<p>
    Selecteer patiënt:
    <?php echo form_dropdown('persoonId', $patientOpties, '0');?>
</p>

<p>Selecteer evenement:
    <?php echo form_dropdown('evenementId', $evenementOpties, '0');?>

</p>
<?php echo form_submit('knop', 'Opslaan', "class='btn btn-primary' data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Agenda aanpassen\"") ?>
<?php echo form_close(); ?>
