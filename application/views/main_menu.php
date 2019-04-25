<?php
    /**
     * @file main_menu.php
     *
     * Een view die de main_menu.php toont. Deze wordt via controllers ingeladen op alle pagina's.
     * Dit is eigenlijk de navigatiebalk van de applicatie. Wordt aangepast voor elke andere soort gebruiker.
     * - Gebruikt Bootstrap
     */
?>

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
                echo anchor('gebruiker/gebruikerBewerken/' . $gebruiker->id, '<i class="fa fa-cog"></i>', 'title="Instellingen"') ;


            switch ($gebruiker->soortPersoonId) {
                case 1:
                    $informatie = '<a href="#" data-toggle="modal" data-target="#admin" title="informatie"><i class="fas fa-info-circle"></i></a>';
                    $uitloggen = anchor('home/meldAf', '<i class="fas fa-sign-out-alt"></i>', 'title="Uitloggen"');
                    break;
                case 2:
                    $informatie = '<a href="#" data-toggle="modal" data-target="#verantwoordelijke" title="informatie"><i class="fas fa-info-circle"></i></a>';
                    $uitloggen = anchor('home/meldAf', '<i class="fas fa-sign-out-alt"></i>', 'title="Uitloggen"');
                    break;
                case 3:
                    $informatie = '<a href="#" data-toggle="modal" data-target="#verzorger" title="informatie"><i class="fas fa-info-circle"></i></a>';
                    $uitloggen = anchor('home/meldAf', '<i class="fas fa-sign-out-alt"></i>', 'title="Uitloggen"');
                    break;
                case 4:
                    $informatie = '<a href="#" data-toggle="modal" data-target="#patient" title="informatie"><i class="fas fa-info-circle"></i></a>';
                    $uitloggen = '';
                    break;
                default:
                    $informatie = '';
                    $uitloggen = '';
                    break;
            }


                echo $informatie;
                echo  $uitloggen;
            } else {
                echo anchor('home','<i class="fas fa-sign-in-alt"></i>', 'title="Inloggen"') ;
            }?>
    </div>
</nav>



<div class="modal fade" id="admin" role="dialog">
    <div class="modal-dialog">
        <!-- Inhoud dialoogvenster -->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Admin</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body info-body">
                <p>Als admin kan je licenties beheren, dat wil zeggen dat je controle hebt over de licenties die je aanbied. Je kan licenties toevoegen, verwijderen of bewereken.
                Bij het toevoegen van een licentie kun je de naam opgeven van uw licentie met een prijs en beschrijving om deze licentie duidelijk te maken.</p>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal">OK</a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="verantwoordelijke" role="dialog">
    <div class="modal-dialog">
        <!-- Inhoud dialoogvenster -->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Verantwoordelijke</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body info-body">
                <h5>Patiënt:</h5>
                <p>Als verantwoordelijke kun je patiënten beheren. dat wil zeggen dat je:</p>
                <ul>
                    <li>Patiënten kunt toevoegen.</li>
                    <li>Patiënten kunt verwijderen.</li>
                    <li>Patiënten kunt bewerken.</li>
                </ul>

                <h5>Agenda patiënt:</h5>
                <p>Als verantwoordelijke kun je de agenda van patiënten beheren. dat wil zeggen dat je:</p>
                <ul>
                    <li>Evenementen kunt toevoegen aan de agenda van de patiënt.</li>
                    <li>Evenementen kunt verwijderen van de agenda van de patiënt.</li>
                </ul>

                <h5>Evenementen:</h5>
                <p>Als verantwoordelijke kun je evenementen beheren. dat wil zeggen dat je:</p>
                <ul>
                    <li>Evenementen kunt toevoegen.</li>
                    <li>Evenementen kunt verwijderen.</li>
                    <li>Evenementen kunt bewerken.</li>
                </ul>

                <h5>Verzorgers:</h5>
                <p>Als verantwoordelijke kun je verzorgers beheren. dat wil zeggen dat je:</p>
                <ul>
                    <li>Verzorgers kunt toevoegen.</li>
                    <li>Verzorgers kunt verwijderen.</li>
                    <li>Verzorgers kunt bewerken.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal">OK</a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="verzorger" role="dialog">
    <div class="modal-dialog">
        <!-- Inhoud dialoogvenster -->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Verzorger</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body info-body">
                <h5>Agenda patiënt:</h5>
                <p>Als verzorger kun je de agenda van patiënten beheren. dat wil zeggen dat je:</p>
                <ul>
                    <li>Evenementen kunt toevoegen aan de agenda van de patiënt.</li>
                    <li>Evenementen kunt verwijderen van de agenda van de patiënt.</li>
                </ul>

                <h5>Patiënten:</h5>
                <p>Als verzoger kun je evenementen beheren. dat wil zeggen dat je:</p>
                <ul>
                    <li>Patiënten kunt bekijken.</li>
                    <li>Patiënten kunt afmelden van hun apparaat.</li>
                </ul>


            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal">OK</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="patient" role="dialog">
    <div class="modal-dialog">
        <!-- Inhoud dialoogvenster -->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Patiënt</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body info-body">

                <p>Als patiënt kun je alleen de agenda bekijken. In deze agenda kan je per evenement de details bekijken van waar en wanneer een evenement plaatsvind.</p>

            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal">OK</a>
            </div>
        </div>
    </div>
</div>