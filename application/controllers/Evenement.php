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

        $this->load->model('evenement_model');
        $data['evenement'] =$this->evenement_model->getEvenement();
        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'evenementBeheren',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }


    public function toonEvenementUpdateNietOk(){

    }

    public function evenementUpdaten(){

        $naam = $this->input->post('naam');
        $beschrijving = $this->input->post('beschrijving');
        $startTijd = $this->input->post('startTijd');
        $eindTijd = $this->input->post('eindTijd');
        $locatie = $this->input->post('locatie');

        if(($naam || $beschrijving || $startTijd || $eindTijd || $locatie) == ""){
            $this->toonEvenementUpdateNietOk();
        }else{
            $updateGelukt = $this->evenement_model->evenementUpdaten($naam, $beschrijving, $startTijd, $eindTijd, $locatie);

            if($updateGelukt){
                $this->evenementBeheren();
            } else {
                $this->toonEvenementUpdateNietOk();
            }
        }
    }

    public function evenementToevoegen()
    {
        $data['titel'] = 'Evenement Toevoegen';

        $naam = $this->input->post('naam');
        $meldingTijd = $this->input->post('meldingTijd');
        $beschrijving = $this->input->post('beschrijving');
        $locatie = $this->input->post('locatie');
        $verplicht = $this->input->post('verplicht');
        $isHerhaling = $this->input->post('isHerhaling');
        $datum = $this->input->post('datum');
        $startTijd = $this->input->post('startTijd');
        $eindTijd = $this->input->post('eindTijd');
    }

}