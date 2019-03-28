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

                <?php

                if ($gebruiker == null) { // niet aangemeld
                    echo divAnchor('home/meldAan', 'Aanmelden');
                } else { // wel aangemeld
                    echo divAnchor('home/meldAf', 'Afmelden');
                    switch ($gebruiker->soortPersoonId) {
                        case 1: // gewone geregistreerde gebruiker
                            echo '<li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdownLicenties" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Licenties
                                        </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownLicenties">' . anchor('licentie/licentieAankopen', 'Licentie aankopen') .
                                anchor('licentie/licentieBeheren', 'Licenties beheren') .
                                '</div>
                                 </li>';
                            break;
                        case 2: // verantwoordelijke

                            echo '<li class="nav-item">' . anchor('home/', 'Home') . ' </li>';

                            echo ' <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdownPatient" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Patiënt
                                        </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownPatient">
                                        <a class="dropdown-item" href="#">' . anchor('patient/beheerPatient', 'Patiënt beheren') . '</a>
                                        <a class="dropdown-item" href="#">' . anchor('patient/beheerPatient', 'Patiënt beheren') . '</a>
                                    </div>
                                   </li>';


                            echo '<li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdownAgendaPatient" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Agenda Patiënt
                                        </a>
                                     <div class="dropdown-menu" aria-labelledby="dropdownAgendaPatient">' .
                                anchor('patient/agendaPatientBekijken', 'Agenda Patiënt bekijken') .
                                anchor('patient/beheerAgendaPatient', 'Agenda Patiënt beheren') .
                                '</div>
                                     <div class="dropdown-menu" aria-labelledby="dropdownEvenementen">' .
                                anchor('patient/toonPatient', 'Patient bekijken') .
                                anchor('patient/agendaPatientBekijken', 'Agenda patient bekijken') .
                                '</div>
                                  </li>';

                            echo '<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownEvenementen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Evenementen
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownEvenementen">' .
                                anchor('evenement/evenementBeheren', 'Evenement beheren') . anchor('evenement/evenementToevoegen', 'Evenement toevoegen') .
                                '</div>
                                    </li>';

                            echo ' <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="dropdownEvenementen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Verzorgers
                                            </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownEvenementen">
                                            <a class="nav-link" href="#">' . anchor('verzorger/toonVerzorger', 'Verzorger bekijken') . '</a>
                                            <a class="nav-link" href="#">' . anchor('verzorger/verzorgersBeheren', 'Verzorgers beheren') . '</a>
                                         </div>

                                 </li>';
                            break;
                        case 3: // verzorger
                            echo '<li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdownAgendaPatient" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Agenda Patiënt
                                        </a>
                                     <div class="dropdown-menu" aria-labelledby="dropdownAgendaPatient">' .
                                anchor('patient/agendaPatientBekijken', 'Agenda Patiënt bekijken') .
                                anchor('patient/beheerAgendaPatient', 'Agenda Patiënt beheren') .
                                '</div>
                                     <div class="dropdown-menu" aria-labelledby="dropdownEvenementen">' .
                                anchor('patient/toonPatient', 'Patient bekijken') .
                                anchor('patient/agendaPatientBekijken', 'Agenda patient bekijken') .
                                '</div>
                                  </li>';

                            echo '<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownEvenementen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Evenementen
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownEvenementen">' .
                                anchor('evenement/evenementBeheren', 'Evenement beheren') . anchor('evenement/evenementToevoegen', 'Evenement toevoegen') .
                                '</div>
                                    </li>';
                            break;
                        case 4:

                            break;
                    }
                }
                ?>
        </ul>
    </div>
</nav>
</body>
