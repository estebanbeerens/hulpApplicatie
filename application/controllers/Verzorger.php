<?php
/**
 * Created by PhpStorm.
 * User: LiamM
 * Date: 14-3-2019
 * Time: 13:52
 *

 */


class Verzorger extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    /**
     * @class Verzorger
     * @brief Verzorger-controller voor alles dat te maken heeft met Verzorger
     *
     * Controller-klasse die alle controllers bevat voor het correct tonen van alles dat te maken heeft met Verzorger.
     */
    public function toonVerzorger()
    {
        $data['titel'] = 'Verzorger tonen';
        $data['ontwerper'] = 'Liam Mentens';
        $data['tester'] = 'Tomas&nbspMarlein';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $this->load->model('Verzorger_model');
        $data['verzorger'] = $this->Verzorger_model->getVerzorger();
        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'verzorgerBekijken',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    /**
     * Haalt de verzorger-record op via Verzorger_model en toont het resulterende object
     * in de view verzorgersBeheren.php
     *
     * @see verzorgersBeheren.php
     */
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

    /**
     * Update de gegevens van de verzorger met de geselecteerde id
     * @param $id De id van de verzorger die geüpdate gaat worden
     *
     */

    public function verzorgersUpdaten($id){

        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $verzorger = new stdClass();
        $verzorger->id = $id;
        $verzorger->naam = $this->input->post('naam');
        $verzorger->voornaam = $this->input->post('voornaam');
        $verzorger->geboortedatum = $this->input->post('geboortedatum');
        $verzorger->woonplaats = $this->input->post('woonplaats');
        $verzorger->adres = $this->input->post('adres');
        $verzorger->gebruikersnaam =$this->input->post('gebruikersnaam');
        $verzorger->passwoord = password_hash($this->input->post('passwoord'), PASSWORD_DEFAULT);
        $verzorger->email = $this->input->post('email');



        $this->load->model('verzorger_model');
        $this->verzorger_model->updaten($verzorger);


        redirect('verzorger/verzorgersBeheren');
    }

    /**
     * Haalt de verzorger-record op via Verzorger-model en toont het resulterende object
     * in de view verzorgerToevoegen.php
     *
     * @see verzorgerToevoegen.php
     */

    public function verzorgerViewLaden()
    {
        $data['titel'] = 'Verzorger toevoegen';

        $data['ontwerper'] = 'Liam Mentens';
        $data['tester'] = 'Tomas&nbspMarlein';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'verzorgerBeheren/verzorgerToevoegen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    /**
     * Maakt een nieuwe verzorger-record aan via Verzorger_model en toont het resulterende object
     * in de view verzorgersBeheren.php
     */

    public function verzorgerToevoegen()
    {
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $naam = $this->input->post('naam');
        $voornaam = $this->input->post('voornaam');
        $geboortedatum = $this->input->post('geboortedatum');
        $woonplaats = $this->input->post('woonplaats');
        $adres = $this->input->post('adres');

        $gebruikersnaam = $this->input->post('gebruikersnaam');
        $passwoord = password_hash($this->input->post('passwoord'), PASSWORD_DEFAULT);
        $email = $this->input->post('email');

        $this->load->model('verzorger_model');
        $this->verzorger_model->insert($naam, $voornaam, $geboortedatum, $woonplaats, $adres, $gebruikersnaam, $passwoord, $email);

        redirect('verzorger/verzorgersBeheren');

    }
    /**
     * Verwijdert een verzorger uit de database-tabel persoon
     */

    public function verzorgerDeleten()
    {
        $data['gebruiker'] = $this->authex->getGebruikerInfo();
        $this->load->model('verzorger_model');

        $id=$this->input->get('id');
        $this->verzorger_model->deleten($id);

        redirect('verzorger/verzorgersBeheren');
    }

    /**
     * Haalt de geselecteerde verzorger op via Verzorger_model om te bewerken en toont het
     * resulterende object in de view verzorgersBeheren.php
     * @param $id De id om een specifieke verzorger te selecteren
     */

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