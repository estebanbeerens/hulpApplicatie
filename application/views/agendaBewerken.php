<?php
$evenementOpties=array();

foreach ($evenement as $item) {
    $evenementOpties[$item->id] = $item->naam;
}

?>

<?php
$agendaBewerkenFormulier = array('id' => 'agendaBewerkenFormulier', 'novalidate' => 'novalidate', 'class' => 'needs-validation');
echo form_open('persoonEvenement/persoonEvenementUpdaten/'. $persoonEvenement->id , $agendaBewerkenFormulier);


?>
<p>Evenement veranderen naar:

    <?php echo form_dropdown('evenementId', $evenementOpties, '0');?>

</p>



<?php echo form_submit('knop', 'Opslaan', "class='btn btn-primary' data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Agenda aanpassen\"") ?>
<?php echo form_close(); ?>
<div class='col-12 mt-4'> <?php echo anchor('persoonEvenement/beheerPersoonEvenementPatient', 'Terug'); ?> </div>
