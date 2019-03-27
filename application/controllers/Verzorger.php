<?php
/**
 * Created by PhpStorm.
 * User: LiamM
 * Date: 14-3-2019
 * Time: 13:52
 */

class Verzorger extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function toonVerzorger()
    {
        $data['titel'] = 'Verzorger tonen';
        $data['ontwerper'] = 'Liam Mentens';
        $data['tester'] = 'Vul mij in';

        $this->load->model('Verzorger_model');
        $data['verzorger'] = $this->Verzorger_model->getVerzorger();
        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'verzorgerBekijken',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function verzorgersBeheren(){
        $data['titel'] = 'Verzorgers beheren';
        $data['ontwerper'] = 'Liam&nbspMentens';
        $data['tester'] = 'vul mij in';

        $this->load->model('verzorger_model');
        $data['verzorger'] = $this->verzorger_model->getVerzorger();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'verzorgersBeheren',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');
        $this->template->load('main_master', $partials, $data);
    }

    public function verzorgersUpdaten(){

        $this->load->model('verzorger_model');

        $naam = $this->input->post('naam');
        $voornaam = $this->input->post('voornaam');
        $geboortedatum = $this->input->post('geboortedatum');
        $woonplaats = $this->input->post('woonplaats');
        $adres = $this->input->post('adres');
        $rekeningnummer = $this->input->post('rekeningnummer');
        $gebruikersnaam = $this->input->post('gebruikersnaam');
        $passwoord = $this->input->post('passwoord');
        $email = $this->input->post('email');
        $id = $this->input->post('id');

        $this->verzorger_model->updaten($id, $naam, $voornaam, $geboortedatum, $woonplaats, $adres, $rekeningnummer, $gebruikersnaam, $passwoord, $email);
        redirect('verzorger/verzorgersBeheren');
    }

}