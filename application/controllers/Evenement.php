<?php
/**
 * Created by PhpStorm.
 * User: LiamM
 * Date: 27-2-2019
 * Time: 18:43
 */

class Evenement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index()
    {

    }

    public function toonEvenement()
    {
        $data['titel'] = 'Evenement tonen';


        $this->load->model('evenement_model');
        $data['evenement'] =$this->evenement_model->getEvenement();
        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'evenementBekijken',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    Public function agendaBekijken($id)
    {
        $data['titel'] = 'Agenda bekijken';

        $this->load->model('persoonevenement_model');
        $this->load->model('evenement_model');

        $query = $this->persoonevenement_model->getWherePersoonId($id);
        $evenementen = array();

        foreach ($query as $row){
            $id = $row->evenementId;
            $evenementen[] = $this->evenement_model->getEvenementById($id);
        }

        $data['evenementen'] = $evenementen;

        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'agendaBekijken',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }


    public function evenementBeheren()
    {
        /**
         * Weergeven van de pagina Evenement Beheren op het scherm
         */

        $data['titel'] = 'Evenement Beheren';
        $data['ontwerper'] = 'Tomas&nbsp;Marlein';
        $data['tester'] = 'vul mij in';

        $this->load->model('evenement_model');
        $data['evenement'] =$this->evenement_model->getEvenement();
        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'evenementBeheren',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function evenementFout()
    {
        /**
         * Weergeven van de foutpagina
         */

        $data['titel'] = 'test';

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'home_fout',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }


    public function evenementUpdaten(){

        $this->load->model('evenement_model');

        $naam = $this->input->post('naam');
        $meldingTijd = $this->input->post('meldingtijd');
        $beschrijving = $this->input->post('beschrijving');
        $locatie = $this->input->post('locatie');
        $verplicht = $this->input->post('verplicht');
        $isHerhaling = $this->input->post('herhaling');
        $datum = $this->input->post('datum');
        $startTijd = $this->input->post('starttijd');
        $eindTijd = $this->input->post('eindtijd');
        $id = $this->input->post('id');

        $this->evenement_model->updaten($id, $naam, $meldingTijd, $beschrijving, $locatie, $verplicht, $isHerhaling, $datum, $startTijd, $eindTijd);



        redirect('evenement/evenementBeheren');
    }

    public function evenementToevoegen()
    {
        $data['titel'] = 'Evenement Toevoegen';

        $naam = $this->input->post('naam');
        $meldingTijd = $this->input->post('meldingtijd');
        $beschrijving = $this->input->post('beschrijving');
        $locatie = $this->input->post('locatie');
        $verplicht = $this->input->post('verplicht');
        $isHerhaling = $this->input->post('isHerhaling');
        $datum = $this->input->post('datum');
        $startTijd = $this->input->post('starttijd');
        $eindTijd = $this->input->post('eindtijd');

        $this->load->model('evenement_model');
        $this->evenement_model->insert($naam, $meldingTijd, $beschrijving, $locatie, $verplicht, $isHerhaling, $datum, $startTijd, $eindTijd);

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'evenementBeheren',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

}