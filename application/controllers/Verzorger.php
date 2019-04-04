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
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
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
        $data['tester'] = 'Tomas&nbspMarlein';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $this->load->model('verzorger_model');
        $data['verzorger'] = $this->verzorger_model->getVerzorger();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'verzorgerBeheren/verzorgersBeheren',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');
        $this->template->load('main_master', $partials, $data);
    }

    public function verzorgersUpdaten($id){

        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $verzorger = new stdClass();
        $verzorger->id = $id;
        $verzorger->naam = $this->input->post('naam');
        $verzorger->voornaam = $this->input->post('voornaam');
        $verzorger->geboortedatum = $this->input->post('geboortedatum');
        $verzorger->woonplaats = $this->input->post('woonplaats');
        $verzorger->adres = $this->input->post('adres');
        $verzorger->rekeningnummer = $this->input->post('rekeningnummer');
        $verzorger->gebruikersnaam =$this->input->post('gebruikersnaam');
        $verzorger->passwoord = $this->input->post('passwoord');
        $verzorger->email = $this->input->post('email');



        $this->load->model('verzorger_model');
        $this->verzorger_model->updaten($verzorger);


        redirect('verzorger/verzorgersBeheren');
    }

    public function verzorgerViewLaden()
    {
        $data['titel'] = 'Verzorger toevoegen';

        $data['ontwerper'] = 'Liam Mentens';
        $data['tester'] = 'vul mij in';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'verzorgerBeheren/verzorgerToevoegen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function verzorgerToevoegen()
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

        $this->load->model('verzorger_model');
        $this->verzorger_model->insert($naam, $voornaam, $geboortedatum, $woonplaats, $adres, $rekeningnummer, $gebruikersnaam, $passwoord, $email);

        redirect('verzorger/verzorgersBeheren');

    }

    public function verzorgerDeleten()
    {
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $this->load->model('verzorger_model');

        $id=$this->input->get('id');
        $this->verzorger_model->deleten($id);

        redirect('verzorger/verzorgersBeheren');
    }

    public function verzorgerBewerken($id)
    {
        $data['titel'] = 'Verzorger bewerken';
        $data['ontwerper'] = 'Liam&nbsp;Mentens';
        $data['tester'] = 'vul mij in';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('verzorger_model');

        $data['verzorger'] = $this->verzorger_model->getSpecificVerzorger($id);

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'verzorgerBeheren/verzorgerBewerken',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

}