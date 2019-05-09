<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Template $template
 * @property Authex $authex
 * @property Gebruiker_model $gebruiker_model
 */
/**
 * @class Home
 * @brief Home-controller voor alles dat te maken heeft met de Home
 *
 * Controller-klasse die alle controllers bevat voor het correct tonen van alles dat te maken heeft met Home.
 */

/**
 * @mainpage Doxygen rapport van de HulpApplicatie.
 *
 * # Wat?
 * Je vind hier ons doxygen commentaar van ons PHP-project <b>Team29</b>.
 * - De commentaar bij onze model- en controllerklassen vind je onder het menu Data Structures.
 * - De commentaar bij onze viewbestanden kan je vinden onder het menu.
 *
 * # Wie?
 *  - Dit project is geschreven en becommentarieerd door alle teamleden van Team29
 *
 * # Team29
 *  - Seppe Peeters
 *  - Esteban Beerens
 *  - René Vanhoof
 *  - Liam Mentens
 *  - Tomas Marlein
 *  - Jeroen Jansen
 */



class Home extends CI_Controller
{

    public function __construct()
    {
        /**
         * Constructor
         */
        parent::__construct();
        $this->load->helper('form');
    }

    /**
     * Zorgt voor de pagina index.
     * in de view index.php
     *
     * @see index.php
     */

    public function index() {

        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['titel'] = 'Inloggen';
        $data['ontwerper'] = 'Jeroen&nbsp;Jansen';
        $data['tester'] = 'Esteban&nbsp;Beerens';

        if($this->authex->isAangemeld()){
            $this->controleerRol();
        } else {

            $partials = array('hoofding' => 'main_header',
                'inhoud' => 'login',
                'menu' => 'main_menu',
                'voetnoot' => 'main_footer');

            $this->template->load('main_master', $partials, $data);
        }
    }

    /**
     * Zorgt voor de pagina evenementBeheren.
     * in de view evenementBeheren.php
     *
     * @see evenementBeheren.php
     */
    public function evenementBeheren()
    {$data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['titel'] = 'Evenement Beheren';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'evenementBeheren',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    /**
     * Zorgt voor de pagina patientBekijken.
     * in de view patientBekijken.php
     *
     * @see patientBekijken.php
     */

    public function patientBekijken()
    {$data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['titel'] = 'Patient Bekijken';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'patientBekijken',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
    /**
     * Dit zorgt voor de foutmelding die eventueel mogelijk is bij incorrecte gegevens.

     *
     */
    public function toonFout()
    {

        $data['titel'] = 'Fout';
        $data['ontwerper'] = 'Jeroen&nbsp;Jansen';
        $data['tester'] = 'Esteban&nbsp;Beerens';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'home_fout',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
    /**
     * Dit controleert of de gegevens correct zijn of aanmelden mogelijk is

     *
     *
     */
    public function controleerAanmelden()
    {


        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $gebruikersnaam = $this->input->post('naam');
        $passwoord = $this->input->post('passwoord');

        if ($this->authex->meldAan($gebruikersnaam, $passwoord)) {

            redirect($this->controleerRol());

        } else {
            redirect('home/toonFout');
        }
    }
    /**
     * Dit controleert de rol van de gebruiker, dit is ook verantwoordelijk voor de permissies.

     */
    public function controleerRol(){

        $gebruiker = $this->authex->getGebruikerInfo();
        switch ($gebruiker->soortPersoonId) {
            case 1:
                redirect('licentie/licentieBeheren');
                    break;
            case 2:
                redirect('patient/toonpatient');
                    break;
            case 3:
                redirect('patient/toonpatient');
                break;

            case 4:
                $this->authex->setAangemeld($gebruiker->id);
                redirect('evenement/toonEvenement');

                break;
            default:


        }
    }
    /**
     * Dit zorgt voor de afmelding.

     *
     *
     */
    public function meldAf()

    {
        $gebruiker = $this->authex->getGebruikerInfo();
        $data['gebruiker'] = $gebruiker;
        $this->authex->meldAf($gebruiker->id);
        redirect('home/index');
    }

    /**
     * Dit stuurt de mail voor de verificatie
     * @param $geadresseerde Het mailadres van de gebruiker
     * @param $boodschap De inhoud van de mail
     * @param $titel Titel van de mail
     *
     */

    private function stuurMail($geadresseerde, $boodschap, $titel)

    {$data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->library('email');

        $this->email->from('info@tvshop.be', 'TV Shop');
        $this->email->to($geadresseerde);
        $this->email->subject($titel);
        $this->email->message($boodschap);

        if (!$this->email->send()) {
            $this->session->set_userdata('titel', 'Fout');
            $this->session->set_userdata('boodschap', 'Onverwachte fout bij versturen mail. Contacteer de administrator. (Kan gewoon inloggen, foutmelding dat de mail niet verstuurd werd.');
            $this->session->set_userdata('link', null);
            return false;
        } else {
            return true;
        }
    }
    /**
     * Dit zorgt voor de activatie.
     * @param $id de id van diegene die geactiveerd word
     *
     *
     */
    public function activeer($id)

    {$data['gebruiker'] = $this->authex->getGebruikerInfo();
        $this->authex->activeer($id);
        $this->session->set_userdata('titel', 'Activeren');
        $this->session->set_userdata('boodschap', 'Account werd geactiveerd. U kan nu aanmelden.');
        $this->session->set_userdata('link', null);
        redirect('/gebruiker/toonMelding');
    }
    /**
     * Dit toont de melding van de verificatie.

     *
     *
     */
    public function toonMelding()

    {$data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['titel'] = $this->session->userdata('titel');
        $data['boodschap'] = $this->session->userdata('boodschap');
        $data['link'] = $this->session->userdata('link');
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['ontwerper'] = 'Seppe&nbsp;Peeters';
        $data['tester'] = 'Esteban&nbsp;Beerens';
        $partials = array('hoofding'=>'main_header',
            'menu'=>'main_menu',
            'inhoud'=>'gebruiker_melding',
            'voetnoot'=>'main_footer'
        );
        $this->template->load('main_master', $partials, $data);
    }

}