<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 7/03/2019
 * Time: 12:41
 */
    /**
     * @property Template $template
     * @property Patient_model $patient_model
     * @property Authex $authex
     */

/**
 * @class Patient
 * @brief Patiënt-controller voor alles dat te maken heeft met de gebruiker Patient
 *
 * Controller-klasse die alle controllers bevat voor het correct tonen van alles dat te maken heeft met Patiënten.
 */
class Patient extends CI_Controller
{
    public function __construct()
    {
        /**
         * Constructor
         */
        parent::__construct();
        $this->load->helper('form');
    }

      public function toonPatient()
{
    /**
     * Toont de lijst van Patienten zodat deze kan bekeken worden
     * in de view patientbekijken.php
     */
    $data['titel'] = 'Patient tonen';
    $gebruiker = $this->authex->getGebruikerInfo();
    $data['gebruiker'] = $gebruiker;

    $data['ontwerper'] = 'René Vanhoof';
    $data['tester'] = 'Liam&nbsp;Mentens';


    $this->load->model('Patient_model');
    $data['patient'] =$this->Patient_model->getPatient();
    $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'patientBekijken',
            'voetnoot' => 'main_footer');

    $this->template->load('main_master', $partials, $data);


}

    public function controleerPatientAangemeld(){

        /**
         * Controleerd of de patiënt is aangemeld.
         */
        $id = $this->input->get('id');
        if($this->authex->isPatientAangemeld($id)){
            return 1;
        } else {
            return 0;
        }


    }

    public function meldPatientAf()
    {
        /**
         * Meld patient af
         */
        $id = $this->input->post('id');

        $patient = new stdClass();
        $patient->isAangemeld = 0;

        $this->load->model('patient_model');
        $this->patient_model->patientAfmelden($id, $patient);
    }


    public function beheerPatient()

        /**
         * Toont pagina beheerPatient
         */

    {$data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['titel'] = 'Patient beheren';

        $data['ontwerper'] = 'Seppe Peeters';
        $data['tester'] = 'Liam&nbspMentens / Afmeldfunctie vanop afstand : Seppe Peeters';


        $this->load->model('Patient_model');
        $data['patient'] =$this->Patient_model->getPatient();
        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'patientBeheer',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
    public function patientViewLaden()

        /**
         * Toont pagina patientbekijken
         */
    {$data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['titel'] = 'Patient toevoegen';

        $data['ontwerper'] = 'Seppe Peeters';
        $data['tester'] = 'Liam&nbsp;Mentens';

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'patientToevoegenPage',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
    public function patientToevoegen()
    {
        /**
         * Toont pagina patientToevoegen
         */
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $naam = $this->input->post('naam');

        $voornaam = $this->input->post('voornaam');
        $geboortedatum = $this->input->post('geboortedatum');
        $woonplaats = $this->input->post('woonplaats');
        $adres = $this->input->post('adres');
        $gebruikersnaam = $this->input->post('gebruikersnaam');
        $passwoord = $this->input->post('passwoord');
        $email = $this->input->post('email');

        $this->load->model('patient_model');
        $this->patient_model->insert( $naam, $voornaam, $geboortedatum, $woonplaats, $adres, $gebruikersnaam, $passwoord, $email, 4);

        redirect('patient/toonPatient');

    }
    public function patientVerwijderen(){

        /**
         * Toont pagina patientBeherne
         */
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $this->load->model('patient_model');

        $id=$this->input->get('id');
        $this->patient_model->deleten($id);

        redirect('patient/beheerPatient');
    }

    public function patientUpdaten($id){
        /**
         * Update de patiënt
         * * @param $id De id van de patiënt die geüpdate gaat worden
         */




        $patient = new stdClass();
        $patient->id = $id;
        $patient->naam = $this->input->post('naam');
        $patient->voornaam = $this->input->post('voornaam');
        $patient->geboortedatum = $this->input->post('geboortedatum');
        $patient->woonplaats = $this->input->post('woonplaats');

        $patient->adres = $this->input->post('adres');
        $patient->gebruikersnaam = $this->input->post('gebruikersnaam');
        $patient->email = $this->input->post('email');


        $this->load->model('patient_model');
        $this->patient_model->update($patient);

        redirect('patient/beheerPatient');
    }



    public function patientbewerken($id) {

        /**
         * Bewerkt de patiënt
         * * @param $id De id van de patiënt die bewerkt gaat worden
         */

        $data['titel'] = 'Patient Bewerken';
        $data['ontwerper'] = 'Seppe Peeters';
        $data['tester'] = 'Liam&nbsp;Mentens';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('patient_model');

        $data['patient'] = $this->patient_model->getSpecificPatient($id);


        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'patientBewerken',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }



}