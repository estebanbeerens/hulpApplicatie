<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @property Template $template
 * @property Authex $authex
 * @property Evenement_model $evenement_model
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

        $data['ontwerper'] = 'Liam Mentens';
        $data['tester'] = 'vul mij in';

        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'evenementBekijken',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function ajax_haalEventOp()
    {

        $this->load->model('evenement_model');
        $data['evenement'] =$this->evenement_model->getEvenement();

        $this->load->view("laadEvenement", $data);
    }

    Public function agendaBekijken($id)
    {
        $data['titel'] = 'Agenda bekijken';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
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
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['titel'] = 'Evenement Beheren';
        $data['ontwerper'] = 'Tomas&nbsp;Marlein';
        $data['tester'] = 'vul mij in';

        $this->load->model('evenement_model');
        $data['evenement'] =$this->evenement_model->getEvenement();
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'evenementBeheren/evenementBeheren',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function evenementFout()
    {
        /**
         * Weergeven van de foutpagina
         */
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['titel'] = 'test';

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'home_fout',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }


    public function evenementBewerken($id) {


        /**
         * ophalen van een specifieke evenement
         */


        $data['titel'] = 'Evenement Bewerken';
        $data['ontwerper'] = 'Tomas&nbsp;Marlein';
        $data['tester'] = 'vul mij in';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('evenement_model');

        $data['evenement'] = $this->evenement_model->getSpecificEvenement($id);


        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'evenementBeheren/evenementBewerken',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function evenementUpdaten($id){

        /**
         * Bewerken van een specifiek evenement
         */

        $herhalingpost = $this->input->post('herhaling');
        $verplichtpost = $this->input->post('verplicht');

        if(isset($herhalingpost)){
            $herhaling = 1;
        }else{
            $herhaling = 0;
        }

        if(isset($verplichtpost)){
            $verplicht = 1;
        }else{
            $verplicht = 0;
        }

        $evenement = new stdClass();
        $evenement->id = $id;
        $evenement->naam = $this->input->post('naam');
        $evenement->meldingTijd = $this->input->post('meldingTijd');
        $evenement->beschrijving = $this->input->post('beschrijving');
        $evenement->locatie = $this->input->post('locatie');
        $evenement->verplicht = $verplicht;
        $evenement->isHerhaling = $herhaling;
        $evenement->datum = $this->input->post('datum');
        $evenement->startTijd = $this->input->post('starttijd');
        $evenement->eindTijd = $this->input->post('eindtijd');


        $this->load->model('evenement_model');
        $this->evenement_model->updaten($evenement);

        redirect('evenement/evenementBeheren');
    }

    public function evenementToevoegen(){


        /**
         * ophalen pagina evenement toevoegen
         */


    $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['titel'] = 'Evenement Toevoegen';

        $data['ontwerper'] = 'Liam Mentens';
        $data['tester'] = 'vul mij in';

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'evenementBeheren/evenementToevoegen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function evenementToevoegenGoed()
    {

        /**
         * Evenement toevoegen in database
         */


        $herhalingpost = $this->input->post('herhaling');
        $verplichtpost = $this->input->post('verplicht');

        if(isset($herhalingpost)){
            $herhaling = 1;
        }else{
            $herhaling = 0;
        }

        if(isset($verplichtpost)){
            $verplicht = 1;
        }else{
            $verplicht = 0;
        }


        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $naam = $this->input->post('naam');
        $meldingTijd = $this->input->post('meldingtijd');
        $beschrijving = $this->input->post('beschrijving');
        $locatie = $this->input->post('locatie');
        $verplicht = $verplicht;
        $isHerhaling = $herhaling;
        $datum = $this->input->post('datum');
        $startTijd = $this->input->post('starttijd');
        $eindTijd = $this->input->post('eindtijd');

        $this->load->model('evenement_model');
        $this->evenement_model->insert($naam, $meldingTijd, $beschrijving, $locatie, $verplicht, $isHerhaling, $datum, $startTijd, $eindTijd);

        redirect('evenement/evenementBeheren');
    }

    public function evenementDeleten(){

        /**
         * Evenement deleten uit database
         */


        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $this->load->model('evenement_model');

        $id=$this->input->get('id');
        $this->evenement_model->deleten($id);

        redirect('evenement/evenementBeheren');
    }





}