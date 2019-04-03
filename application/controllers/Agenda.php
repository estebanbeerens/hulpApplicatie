<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 7/03/2019
 * Time: 12:41
 */
/**
 * @property Template $template
 * @property PersoonEvenement_model $agenda_model
 */
class Agenda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }
    public function toonAgendaPatient()
    {
        $data['titel'] = 'Agenda patient tonen';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['ontwerper'] = 'René Vanhoof';
        $data['tester'] = 'Geen Idee';


        $this->load->model('Patient_model');
        $data['personen'] =$this->Patient_model->getPatientenPatientEvenement();
        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'agendaBekijken',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
}