<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @property Template $template
 * @property Authex $authex
 * @property PersoonEvenement_model $evenement_model
 */
class PersoonEvenement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }
    public function toonPersoonEvenementPatient()
    {
        $data['titel'] = 'Agenda patient tonen';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['ontwerper'] = 'René Vanhoof';
        $data['tester'] = 'Geen Idee';


        $this->load->model('Patient_model');
        $data['personen'] =$this->Patient_model->getPatientenPatientEvenement();
        $this->load->model('Evenement_model');
        $data['evenementen'] = $this->Evenement_model->getEvenementenPersoonEvenement();
        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'agendaBekijken',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
    public function beheerPersoonEvenementPatient()
    {
        $data['titel'] = 'Agenda patient bekijken';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['ontwerper'] = 'René Vanhoof';
        $data['tester'] = 'Geen Idee';


        $this->load->model('Patient_model');
        $data['personen'] =$this->Patient_model->getPatientenPatientEvenement();
        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'agendaBeheren',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
}