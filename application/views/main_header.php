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

                if ($gebruiker == null) { // niet aangemeldecho divAnchor('home/meldAan', 'Aanmelden');
                } else { // wel aangemeld
                    echo divAnchor('home/meldAf', 'Afmelden');
                    switch ($gebruiker->soortPersoonId) {
                        case 1: // gewone geregistreerde gebruiker
                            echo '<li class="nav-item">' . anchor('licentie/licentieAankopen', 'Licentie aankopen') . '</li>';
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
                                       ' . anchor('patient/toonPatient', 'Patiënt bekijken') . '
                                      ' . anchor('patient/beheerPatient', 'Patiënt beheren') . '
                                       ' . anchor('patient/patientViewLaden', 'Patiënt toevoegen') . '
                                    </div>
                                   </li>';


                            echo '<li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdownAgendaPatient" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Agenda Patiënt
                                        </a>
                                     <div class="dropdown-menu" aria-labelledby="dropdownAgendaPatient">' .
                                anchor('persoonEvenement/toonPersoonEvenementPatient', 'Agenda Patiënt bekijken') .
                                anchor('persoonEvenement/beheerPersoonEvenementPatient', 'Agenda Patiënt beheren') .
                                '</div>
                                     <div class="dropdown-menu" aria-labelledby="dropdownEvenementen">' .
                                anchor('patient/toonPatient', 'Patient bekijken') .
                                anchor('patient/agendaPatientBekijken', 'Agenda patient bekijken') .
                                '</div>
                                  </li>';

                            echo '<li class="nav-item">' . anchor('evenement/evenementBeheren', 'Evenementen') . ' </li>';


                            echo ' <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="dropdownEvenementen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Verzorgers
                                            </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownEvenementen">
                                           ' . anchor('verzorger/verzorgerViewLaden', 'Verzorger toevoegen') . '
                                            ' . anchor('verzorger/verzorgersBeheren', 'Verzorgers beheren') . '
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
                                  </li>';
                            echo '<li class="nav-item">
                                       ' . anchor('patient/toonPatient', 'Patient bekijken') . '
                                </li>';

                            echo '<li class="nav-item">' . anchor('evenement/evenementBeheren', 'Evenementen') . ' </li>';
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
