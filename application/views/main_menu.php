<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
</a>
<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <?php echo anchor('home', 'Hulpapplicatie') ?>
            <div id="close-sidebar">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="sidebar-header">
            <?php
                if (isset($gebruiker)) {
                    switch($gebruiker->soortPersoonId) {
                        case 1:
                            $functie = 'Eigenaar';
                            break;
                        case 2:
                            $functie = 'Verantwoordelijke';
                            break;
                        case 3:
                            $functie = 'Verzorger';
                            break;
                        case 4:
                            $functie = 'Patiënt';
                            break;
                        default:
                            $functie = 'Functie niet toegewezen';
                            break;
                    }
                echo '
                <div class="user-pic">
                    <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                         alt="Profielfoto">
                </div>
                <div class="user-info">
                  <span class="user-name">' . $gebruiker->voornaam . '
                    <span class="font-weight-bold">' . $gebruiker->naam . '</span>
                  </span>
                    <span class="user-role">' . $gebruiker->gebruikersnaam . '</span>
                    <span class="user-status">' . $functie . '</span>
                </div>';
            } else {
                    echo anchor('home', 'Log in om verder te gaan', 'class="font-weight-bold"');
                }?>
        </div>
        <div class="sidebar-menu">
            <ul>
            <?php if (isset($gebruiker)) {
                switch($gebruiker->soortPersoonId) {
                    case 1:
                        echo '<li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Licenties</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        ' . anchor('licentie/licentieBeheren', 'Licenties beheren') . '
                                    </li>
                                    <li>
                                        ' . anchor('licentie/aangekochteLicentiesBeheren', 'Aangekochte licenties beheren') . '
                                    </li>
                                </ul>
                            </div>
                        </li>';
                        break;
                    case 2:
                        echo '<li class="header-menu">
                                <span>Patiënten</span>
                            </li>
                            <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-procedures"></i>
                                <span>Patiënt</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        ' . anchor('patient/toonPatient', 'Patiënt bekijken') . '
                                    </li>
                                    <li>
                                        ' . anchor('patient/beheerPatient', 'Patiënt beheren') . '
                                    </li>
                                    <li>
                                        ' . anchor('patient/patientViewLaden', 'Patiënt toevoegen') . '
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="far fa-calendar-alt"></i>
                                <span>Agenda patiënt</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        ' . anchor('persoonEvenement/toonPersoonEvenementPatient', 'Agenda patient bekijken') . '
                                    </li>
                                    <li>
                                        ' . anchor('persoonEvenement/beheerPersoonEvenementPatient', 'Agenda patient beheren') . '
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="header-menu">
                            <span>Evenementen</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-calendar-day"></i>
                                <span>Evenementen</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        ' . anchor('evenement/evenementBeheren', 'Evenementen beheren') . '
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="header-menu">
                            <span>Verzorgers</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-user-nurse"></i>
                                <span>Verzorgers</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        ' . anchor('verzorger/verzorgersBeheren', 'Verzorger beheren') . '
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>';
                        break;
                    case 3:
                        echo '<li class="sidebar-dropdown">
                            <a href="#">
                                <i class="far fa-calendar-alt"></i>
                                <span>Agenda patiënt</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        ' . anchor('patient/agendaPatientBekijken', 'Agenda patiënt bekijken') . '
                                    </li>
                                    <li>
                                        ' . anchor('patient/beheerAgendaPatient', 'Agenda patiënt beheren') . '
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-menu">
                            ' . anchor('patient/toonPatient', '<i class="fas fa-procedures"></i><span>Patient bekijken</span>') . '
                        </li>';
                        break;
                    case 4:

                        break;
                    default:
                        echo '<p>Functie niet toegewezen</p>';
                        break;
                    }
                }?>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">

        <?php
            if (isset($gebruiker)) {
                echo anchor('', '<i class="fa fa-cog"></i>', 'title="Instellingen"') ;
                echo anchor('home/meldAf', '<i class="fas fa-sign-out-alt"></i>', 'title="Uitloggen"') ;
            } else {
                echo anchor('home','<i class="fas fa-sign-in-alt"></i>', 'title="Inloggen"') ;
            }?>
    </div>
</nav>