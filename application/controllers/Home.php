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
<<<<<<< HEAD
        $data['ontwerper'] = '????';
        $data['tester'] = '???';

=======
        $data['ontwerper'] = 'Vul mij in';
        $data['tester'] = 'vul mij in';
>>>>>>> evenement toevoegen op andere pagina
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
        $data['ontwerper'] = 'Seppe Peeters';
        $data['tester'] = 'vul in';

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
            redirect('evenement/toonevenement');
        } else {
            redirect('home/toonFout');
        }
    }

    public function meldAf()
    {
        $this->authex->meldAf();
        redirect('home/index');
    }


    private function stuurMail($geadresseerde, $boodschap, $titel)
    {
        $this->load->library('email');

        $this->email->from('info@tvshop.be', 'TV Shop');
        $this->email->to($geadresseerde);
        $this->email->subject($titel);
        $this->email->message($boodschap);

        if (!$this->email->send()) {
            $this->session->set_userdata('titel', 'Fout');
            $this->session->set_userdata('boodschap', 'Onverwachte fout bij versturen mail. Contacteer de administrator.');
            $this->session->set_userdata('link', null);
            return false;
        } else {
            return true;
        }
    }

    public function registreerGebruiker()
    {
        $naam = $this->input->post('naam');
        $email = $this->input->post('email');
        $wachtwoord = $this->input->post('wachtwoord');
        $gebruikersnaam = $this->input->post('gebruikersnaam');

        if (strlen($naam) >= 2 && strpos($email, '@') != null && strlen($wachtwoord) >= 3) {
            $id = $this->authex->registreer($naam, $email, $wachtwoord, $gebruikersnaam);
            if ($id != 0) {
                $this->session->set_userdata('titel', 'Registreren');
                $this->session->set_userdata('boodschap', 'Gebruiker werd aangemaakt! Er werd een e-mail verstuurd met een activatielink. Nadat u deze link hebt aangeklikt, kan u zich aanmelden.');
                $this->session->set_userdata('link', null);
                $boodschap = "U bent geregistreerd. Klik op onderstaande link om uw registratie te activeren.\n<a href='" . site_url('/home/activeer/' . $id) . "'>" . site_url('/gebruiker/activeer/' . $id) . "</a>";
                $this->stuurMail($email, $boodschap, 'Mantelzorg: Activatielink');
            } else {
                $this->session->set_userdata('titel', 'Fout');
                $this->session->set_userdata('boodschap', 'E-mail bestaat reeds. Probeer opnieuw.');
                $this->session->set_userdata('link', array('url' => '/home/registreer', 'tekst' => 'Terug'));
            }
        } else {
            $this->session->set_userdata('titel', 'Fout');
            $this->session->set_userdata('boodschap', 'Gelieve alle tekstvakken (naam, e-mail én wachtwoord) correct in te vullen.');
            $this->session->set_userdata('link', array('url' => '/home/registreer', 'tekst' => 'Terug'));
        }
        redirect('/home/toonMelding');
    }

    public function activeer($id)
    {
        $this->authex->activeer($id);
        $this->session->set_userdata('titel', 'Activeren');
        $this->session->set_userdata('boodschap', 'Account werd geactiveerd. U kan nu aanmelden.');
        $this->session->set_userdata('link', null);
        redirect('/gebruiker/toonMelding');
    }

    public function toonMelding()
    {
        $data['titel'] = $this->session->userdata('titel');
        $data['boodschap'] = $this->session->userdata('boodschap');
        $data['link'] = $this->session->userdata('link');
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['ontwerper'] = 'Seppe Peeters';
        $data['tester'] = 'vul in';
        $partials = array('hoofding'=>'main_header',
            'menu'=>'main_menu',
            'inhoud'=>'gebruiker_melding',
            'voetnoot'=>'main_footer'
        );
        $this->template->load('main_master', $partials, $data);
    }

}