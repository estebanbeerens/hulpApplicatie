<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Team 29</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo anchor('home/', 'Home'); ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownPatient" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Patiënt
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownPatient">
                        <a class="dropdown-item" href="#"><?php echo anchor('patient/toonPatient', 'Patiënt bekijken'); ?></a>
                        <a class="dropdown-item" href="#"><?php echo anchor('patient/beheerPatient', 'Patiënt beheren'); ?></a>
                        <a class="dropdown-item" href="#"><?php echo anchor('patient/patientViewLaden', 'Patiënt toevoegen'); ?></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownAgendaPatient" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Agenda Patiënt
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownAgendaPatient">
                        <?php echo anchor('patient/toonAgendaPatient', 'Agenda Patiënt bekijken'); ?>
                        <?php echo anchor('patient/beheerAgendaPatient', 'Agenda Patiënt beheren'); ?>
                    </div>


                    <div class="dropdown-menu" aria-labelledby="dropdownEvenementen">
                        <?php echo anchor('patient/toonPatient', 'Patient bekijken'); ?>
                        <?php echo anchor('patient/agendaPatientBekijken', 'Agenda patient bekijken'); ?>
                    </div>
                </li>
<<<<<<< HEAD




                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo anchor('verzorger/toonVerzorger', 'Verzorger bekijken'); ?></a>

=======
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo anchor('patient/toonPatient', 'Patient bekijken'); ?>
                </li>

>>>>>>> Verzorgerse toevoegen
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownEvenementen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Verzorgers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownEvenementen">
                        <a class="nav-link" href="#"><?php echo anchor('verzorger/verzorgersBeheren', 'Verzorgers beheren'); ?></a>
                        <a class="nav-link" href="#"><?php echo anchor('verzorger/verzorgerViewLaden', 'Verzorgers toevoegen'); ?></a>
                    </div>
<<<<<<< HEAD

=======
>>>>>>> Verzorgerse toevoegen
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownEvenementen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Evenementen
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownEvenementen">
                        <?php echo anchor('evenement/evenementBeheren', 'Evenement beheren'); ?>
                        <?php echo anchor('evenement/evenementToevoegen', 'Evenement toevoegen'); ?>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownLicenties" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Licenties
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownLicenties">
                        <?php echo anchor('licentie/licentieAankopen', 'Licentie aankopen'); ?>
                        <?php //echo anchor('licentie/licentieToevoegen', 'Licentie toevoegen'); ?>
                        <?php echo anchor('licentie/licentieBeheren', 'Licenties beheren'); ?>
                    </div>
                </li>



                <li class="nav-item">
                    <?php if ($gebruiker != null) { // niet aangemeld
                        echo divAnchor('home/meldAf', 'Afmelden');} ?>
                </li>

            </ul>
        </div>
    </nav>