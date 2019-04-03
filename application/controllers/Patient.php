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
     */

class Patient extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

      public function toonPatient()
{
    $data['titel'] = 'Patient tonen';
    $data['gebruiker'] = $this->authex->getGebruikerInfo();
    $data['ontwerper'] = 'René Vanhoof';
    $data['tester'] = 'Geen Idee';


    $this->load->model('Patient_model');
    $data['patient'] =$this->Patient_model->getPatient();
    $partials = array('hoofding' => 'main_header',
        'menu' => 'main_menu',
        'inhoud' => 'patientBekijken',
        'voetnoot' => 'main_footer');

    $this->template->load('main_master', $partials, $data);
}


    public function beheerPatient()
    {$data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['titel'] = 'Patient beheren';

        $data['ontwerper'] = 'Seppe Peeters';
        $data['tester'] = 'Geen Idee';


        $this->load->model('Patient_model');
        $data['patient'] =$this->Patient_model->getPatient();
        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'patientBeheer',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
    public function patientViewLaden()
    {$data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['titel'] = 'Patient toevoegen';

        $data['ontwerper'] = 'Seppe Peeters';
        $data['tester'] = 'vul mij in';

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'patientToevoegenPage',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
    public function patientToevoegen()
    {
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $naam = $this->input->post('naam');

        $voornaam = $this->input->post('voornaam');
        $geboortedatum = $this->input->post('geboortedatum');
        $woonplaats = $this->input->post('woonplaats');
        $adres = $this->input->post('adres');
        $rekeningnummer = $this->input->post('rekeningnummer');
        $gebruikersnaam = $this->input->post('gebruikersnaam');
        $passwoord = $this->input->post('passwoord');
        $email = $this->input->post('email');

        $this->load->model('patient_model');
        $this->patient_model->insert( $naam, $voornaam, $geboortedatum, $woonplaats, $adres, $rekeningnummer, $gebruikersnaam, $passwoord, $email, 4);

        redirect('patient/toonPatient');

    }


    public function agendaPatientBekijken()
    {$data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['titel'] = 'Agenda patient bekijken';

        $data['ontwerper'] = 'René Vanhoof';
        $data['tester'] = 'vul mij in';

        $this->load->model('Patient_model');
        $data['agenda'] =$this->Patient_model->getAgendaPatient();
        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'agendaBekijken',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
}