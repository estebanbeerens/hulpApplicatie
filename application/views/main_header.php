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
                <li class="nav-item">
                    <a class="nav-link" href=""><?php echo anchor('evenement/evenementBeheren', 'Evenement Beheren'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo anchor('home/', 'Link'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo anchor('patient/toonPatient', 'Patient bekijken'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo anchor('licentie/licentieAankopen', 'Licentie aankopen'); ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Link</a>
                        <a class="dropdown-item" href="#">Link</a>
                        <a class="dropdown-item" href="#">Link</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>