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
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownPatienten" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Patienten
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownEvenementen">
                        <a class="nav-link dropdown-item" href=""><?php echo anchor('patient/toonPatient', 'Patient bekijken'); ?></a>
                        <a class="dropdown-item" href=""><?php echo anchor('patient/agendaPatientBekijken', 'Agenda patient bekijken'); ?></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo anchor('patient/toonPatient', 'Patient bekijken'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo anchor('verzorger/toonVerzorger', 'Verzorger bekijken'); ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownEvenementen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Evenementen
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownEvenementen">
                        <a class="dropdown-item" href=""><?php echo anchor('evenement/evenementBeheren', 'Evenement beheren'); ?></a>
                        <a class="dropdown-item" href=""><?php echo anchor('evenement/evenementToevoegen', 'Evenement toevoegen'); ?></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownLicenties" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Licenties
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownLicenties">
                        <a class="dropdown-item" href="#"><?php echo anchor('licentie/licentieAankopen', 'Licentie aankopen'); ?></a>
                        <a class="dropdown-item" href="#"><?php echo anchor('licentie/licentieToevoegen', 'Licentie toevoegen'); ?></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>