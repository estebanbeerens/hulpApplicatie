<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Template $template
 * @property Authex $authex
 */
class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index()
    {
        $data['titel'] = 'Inloggen';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'login',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function evenementBeheren()
    {
        $data['titel'] = 'Evenement Beheren';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'evenementBeheren',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
    public function patientBekijken()
    {
        $data['titel'] = 'Patient Bekijken';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'patientBekijken',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function registreer()
    {
        $data['titel'] = 'Registreer';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'registreer',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }


    public function meldAan()
    {
        $data['titel'] = 'Aanmelden';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'home_aanmelden',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function toonFout()
    {
        $data['titel'] = 'Fout';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'home_fout',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function controleerAanmelden()
    {
        $gebruikersnaam = $this->input->post('gebruikersnaam');
        $passwoord = $this->input->post('passwoord');

        if ($this->authex->meldAan($gebruikersnaam, $passwoord)) {
            redirect('home/index');
        } else {
            redirect('home/toonFout');
        }
    }

    public function meldAf()
    {
        $this->authex->meldAf();
        redirect('home/index');
    }

    public function registreerGebruiker()
    {
        $info['naam'] = $this->input->post('naam');
        $info['email'] = $this->input->post('email');
        $info['wachtwoord'] = $this->input->post('wachtwoord');

        if ((strlen($info['naam']) < 2) || (strlen($info['wachtwoord']) < 3) || (!strpos($info['email'], "@"))) {
            $this->session->set_userdata('titel', 'Fout');
            $this->session->set_userdata('boodschap', 'Gelieve alle tekstvakken (naam, email & wachtwoord) correct in te vullen!');
            $this->session->set_userdata('link', array('url'=>'/home/RegisteerGebruiker', 'tekst' => 'Terug'));
        }
        else{//velden goed ingevuld

            $id = $this->authex->registreer($info['naam'],$info['email'],$info['wachtwoord']);
            $this->session->set_userdata('id', $id);

            if ($id!==0){


                    $this->session->set_userdata('titel', 'Success');
                    $this->session->set_userdata('boodschap', 'Gebruiker werd aangemaakt! Er werd een E-mail verzonden met een activatielink. nadat u deze link hebt aangeklikt kan u zich aanmelden');
                    $this->session->set_userdata('link', null);


            }
            else{
                $this->session->set_userdata('titel', 'Fout');
                $this->session->set_userdata('boodschap', 'E-mail bestaat reeds, probeer opnieuw');
                $this->session->set_userdata('link', array('url'=>'/home/RegisteerGebruiker\'', 'tekst' => 'Terug'));
            }
        }

        redirect('home/toonmelding');
    }

    public function toonMelding()
        #public function toonMelding($titel, $boodschap, $link = null)
    {
        $data['titel'] = $this->session->userdata('titel');
        $data['boodschap'] = $this->session->userdata('boodschap');
        $data['link'] = $this->session->userdata('link');

        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array(
            'hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'gebruiker_melding',
            'voetnoot' => 'main_footer'
        );

        $this->template->load('main_master', $partials, $data);
    }
}