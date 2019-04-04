<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Template $template
 * @property Authex $authex
 * @property Gebruiker_model $gebruiker_model
 */
class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index() {
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['titel'] = 'Inloggen';
        $data['ontwerper'] = 'Jeroen&nbsp;Jansen';
        $data['tester'] = 'Esteban&nbsp;Beerens';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

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

    public function controleerAanmelden()
    {$data['gebruiker'] = $this->authex->getGebruikerInfo();
        $gebruikersnaam = $this->input->post('naam');
        $passwoord = $this->input->post('passwoord');

        if ($this->authex->meldAan($gebruikersnaam, $passwoord)) {

            redirect($this->controleerRol());

        } else {
            redirect('home/toonFout');
        }
    }

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
                redirect('evenement/toonEvenement');
                break;
            default:

        }
    }

    public function meldAf()
    {$data['gebruiker'] = $this->authex->getGebruikerInfo();
        $this->authex->meldAf();
        redirect('home/index');
    }



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

    public function activeer($id)
    {$data['gebruiker'] = $this->authex->getGebruikerInfo();
        $this->authex->activeer($id);
        $this->session->set_userdata('titel', 'Activeren');
        $this->session->set_userdata('boodschap', 'Account werd geactiveerd. U kan nu aanmelden.');
        $this->session->set_userdata('link', null);
        redirect('/gebruiker/toonMelding');
    }

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