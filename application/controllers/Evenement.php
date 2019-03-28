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

        $data['ontwerper'] = 'Liam Mentens';
        $data['tester'] = 'vul mij in';

        $this->load->model('evenement_model');
        $data['evenement'] =$this->evenement_model->getEvenement();
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'evenementBekijken',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
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
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['titel'] = 'test';

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'home_fout',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }


    public function evenementUpdaten(){
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
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
    {$data['gebruiker'] = $this->authex->getGebruikerInfo();
        $data['titel'] = 'Evenement Toevoegen';

        $data['ontwerper'] = 'Liam Mentens';
        $data['tester'] = 'vul mij in';

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'evenementToevoegen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function evenementToevoegenGoed()
    {$data['gebruiker'] = $this->authex->getGebruikerInfo();
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

        redirect('evenement/evenementBeheren');
    }

    public function evenementDeleten(){
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $this->load->model('evenement_model');

        $id=$this->input->get('id');
        $this->evenement_model->deleten($id);

        redirect('evenement/evenementBeheren');
    }





}