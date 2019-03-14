<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 7/03/2019
 * Time: 12:41
 */



class Patient extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index()
    {

    }
    public function toonPatient()
    {
        $data['titel'] = 'Patient tonen';
<<<<<<< HEAD
        $data['ontwerper'] = 'René Vanhoof';
        $data['tester'] = 'Geen Idee';

=======
        $data['ontwerper'] = 'Liam Mentens';
        $data['tester'] = 'Vul mij in';
>>>>>>> evenement toevoegen op andere pagina

        $this->load->model('Patient_model');
        $data['patient'] =$this->Patient_model->getPatient();
        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'patientBekijken',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
}