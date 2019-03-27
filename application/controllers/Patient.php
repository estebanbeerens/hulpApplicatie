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
    {
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
    public function agendaPatientBekijken()
    {
        $data['titel'] = 'Agenda patient bekijken';

        $data['ontwerper'] = 'René Vanhoof';
        $data['tester'] = 'vul mij in';

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'agendaPatientBekijken',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
}