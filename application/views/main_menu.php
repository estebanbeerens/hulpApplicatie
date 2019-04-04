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
            <div class="user-pic">
                <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                     alt="User picture">
            </div>
            <div class="user-info">
              <span class="user-name"><?php echo $gebruiker->naam ?>
                <span class="font-weight-bold"><?php echo $gebruiker->voornaam ?></span>
              </span>
                <span class="user-role"><?php echo $gebruiker->gebruikersnaam ?></span>
                <span class="user-status">
                    <?php
                        switch($gebruiker->soortPersoonId) {
                            case 1:
                                echo 'Eigenaar';
                                break;
                            case 2:
                                echo 'Verantwoordelijke';
                                break;
                            case 3:
                                echo 'Verzorger';
                                break;
                            case 4:
                                echo 'Patiënt';
                                break;
                            default:
                                echo 'Functie niet toegewezen';
                                break;
                        }
                    ?>
                </span>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li class="header-menu">
                    <span>General</span>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="#">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="#">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="#">Dashboard 3</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-shopping-cart"></i>
                        <span>E-commerce</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="#">Products

                                </a>
                            </li>
                            <li>
                                <a href="#">Orders</a>
                            </li>
                            <li>
                                <a href="#">Credit cart</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="far fa-gem"></i>
                        <span>Components</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="#">General</a>
                            </li>
                            <li>
                                <a href="#">Panels</a>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                            </li>
                            <li>
                                <a href="#">Icons</a>
                            </li>
                            <li>
                                <a href="#">Forms</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-chart-line"></i>
                        <span>Charts</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="#">Pie chart</a>
                            </li>
                            <li>
                                <a href="#">Line chart</a>
                            </li>
                            <li>
                                <a href="#">Bar chart</a>
                            </li>
                            <li>
                                <a href="#">Histogram</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-globe"></i>
                        <span>Maps</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="#">Google maps</a>
                            </li>
                            <li>
                                <a href="#">Open street map</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="#">
            <i class="fa fa-cog"></i>
        </a>
        <a href="#">
            <i class="fas fa-sign-out-alt"></i>
        </a>
    </div>
</nav>