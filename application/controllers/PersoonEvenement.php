<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @property Template $template
 * @property Authex $authex
 * @property PersoonEvenement_model $evenement_model
 */

/**
 * @class PersoonEvenement
 * @brief PersoonEvenement-controller voor alles dat te maken heeft met de PersoonEvenement
 *
 * Controller-klasse die alle controllers bevat voor het correct tonen van alles dat te maken heeft met PersoonEvenement.
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
    public function persoonEvenementToevoegen()
    {
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $persoonId = $this->input->post('persoonId');
        $evenementId = $this->input->post('evenementId');

        $this->load->model('persoonEvenement_model');
        $this->persoonEvenement_model->insert($persoonId, $evenementId);

        redirect('persoonEvenement/beheerPersoonEvenementPatient');
    }
    public function persoonEvenementDeleten()
    {
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $this->load->model('persoonEvenement_model');

        $id=$this->input->get('id');
        $this->persoonEvenement_model->deleten($id);

        redirect('persoonEvenement/beheerPersoonEvenementPatient');
    }
    public function persoonEvenementAanpassen(){
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $this->load->model('persoonEvenement_model');

        $id=$this->input->
    }
    public function persoonEvenementBewerken($id)
    {
        $data['titel'] = 'Agenda bewerken';
        $data['ontwerper'] = 'René&nbsp;Vanhoof';
        $data['tester'] = 'vul mij in';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('persoonEvenement_model');

        $data['agenda'] = $this->persoonEvenement_model->getPersoonEvenement($id);
        $this->load->model('Patient_model');
        $data['patient'] =$this->Patient_model->getPatient();
        $this->load->model('Evenement_model');
        $data['evenement'] =$this->Evenement_model->getEvenement();
        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'agendaBewerken',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
    public function persoonEvenementViewLaden()
    {
        $data['titel'] = 'Agenda toevoegen';

        $data['ontwerper'] = 'René&nbsp;Vanhoof';
        $data['tester'] = 'vul mij in';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('Patient_model');
        $data['patient'] =$this->Patient_model->getPatient();
        $this->load->model('Evenement_model');
        $data['evenement'] =$this->Evenement_model->getEvenement();
        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'agendaToevoegen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
}