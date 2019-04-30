<?php
$evenementOpties=array();
$evenementOpties[0] = '-- Select --';
foreach ($evenement as $item) {
    $evenementOpties[$item->id] = $item->naam;
}

?>

<?php
$agendaBewerkenFormulier = array('id' => 'agendaBewerkenFormulier', 'novalidate' => 'novalidate', 'class' => 'needs-validation');
echo form_open('persoonEvenement/persoonEvenementBewerken/' , $agendaBewerkenFormulier);


?>
<p>Evenement veranderen naar:
    <?php echo form_dropdown('Evenement', $evenementOpties, '0');?>

</p>



<?php echo form_submit('knop', 'Opslaan', "class='btn btn-primary' data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Agenda aanpassen\"") ?>
<?php echo form_close(); ?>
