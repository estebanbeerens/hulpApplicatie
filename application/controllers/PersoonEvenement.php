<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @property Template $template
 * @property Authex $authex
 * @property PersoonEvenement_model $Persoonevenement_model
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
        /**
         * roept de pagina agenda bekijken op
         */
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
            'inhoud' => 'agenda/agendaBekijken',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
    public function beheerPersoonEvenementPatient()
    {
        /**
         * roept de pagina agenda beheren op
         */
        $data['titel'] = 'Agenda patient bekijken';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['ontwerper'] = 'René Vanhoof';
        $data['tester'] = 'Geen Idee';


        $this->load->model('Patient_model');
        $data['personen'] =$this->Patient_model->getPatientenPatientEvenement();
        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'agenda/agendaBeheren',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
    public function persoonEvenementToevoegen()
    {
        /**
         * Voegt de gegevens van de agenda (persoonEvenement) met de geselecteerde id toe
         *
         */
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $persoonId = $this->input->post('persoonId');
        $evenementId = $this->input->post('evenementId');

        $this->load->model('persoonEvenement_model');
        $this->persoonEvenement_model->insert($persoonId, $evenementId);

        redirect('persoonEvenement/beheerPersoonEvenementPatient');
    }
    public function persoonEvenementDeleten()
    {
        /**
         * Verwijdert de gegevens van de agenda (persoonEvenement) met de geselecteerde id toe
         *
         */
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $this->load->model('persoonEvenement_model');

        $id=$this->input->get('id');
        $this->persoonEvenement_model->deleten($id);

        redirect('persoonEvenement/beheerPersoonEvenementPatient');
    }
    public function persoonEvenementUpdaten($id){
        /**
         * Update de gegevens van de agenda (persoonEvenement) met de geselecteerde id
         * @param $id De id van de persoonEvenement die geüpdate gaat worden
         *
         */

        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $persoonEvenement = new stdClass();
        $persoonEvenement->id = $id;
        $persoonEvenement->persoonId = $this->input->post('persoonId');
        $persoonEvenement->evenementid = $this->input->post('evenementId');

        $this->load->model('persoonEvenement_model');
        $this->persoonEvenement_model->updaten($persoonEvenement);


        redirect('persoonEvenement/beheerPersoonEvenementPatient');
    }
    public function persoonEvenementBewerken($id)
    {
        /**
         * roept de pagina agenda bewerken op
         */
        $data['titel'] = 'Agenda bewerken';
        $data['ontwerper'] = 'René&nbsp;Vanhoof';
        $data['tester'] = 'vul mij in';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('persoonEvenement_model');
        $data['persoonEvenement'] = $id;
        $data['agenda'] = $this->persoonEvenement_model->getPersoonEvenement($id);
        $this->load->model('Patient_model');
        $data['persoon'] = $id;
        $data['patient'] =$this->Patient_model->getPatient();
        $this->load->model('Evenement_model');
        $data['evenement'] =$this->Evenement_model->getEvenement();
        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'agenda/agendaBewerken',
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
            'inhoud' => 'agenda/agendaToevoegen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
}