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
        $data['titel'] = 'Evenement Beheren';

        $this->load->model('evenement_model');
        $data['evenement'] =$this->evenement_model->getEvenement();
        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'evenementBeheren',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

}