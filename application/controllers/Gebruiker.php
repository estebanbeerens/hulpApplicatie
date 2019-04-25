<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    /**
     * @property Template $template
     * @property Authex $authex
     * @property Gebruiker_model $gebruiker_model
     */
/**
 * @class Gebruiker
 * @brief Gebruiker-controller voor alles dat te maken heeft met de Gebruiker
 *
 * Controller-klasse die alle controllers bevat voor het correct tonen van alles dat te maken heeft met Gebruikers.
 */
    class Gebruiker extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('form');
            $this->load->helper('notation');
        }

        public function registreer()
        {


            /**
             * Toont pagina registreer
             * in de view registreer.php
             */

            $data['titel'] = 'Registreren';
            $data['gebruiker'] = $this->authex->getGebruikerInfo();
            $data['ontwerper'] = 'Seppe&nbsp;Peeters';
            $data['tester'] = 'Esteban&nbsp;Beerens';

            $partials = array('hoofding' => 'main_header',
                'inhoud' => 'gebruiker/registreer',
                'menu' => 'main_menu',
                'voetnoot' => 'main_footer');

            $this->template->load('main_master', $partials, $data);
        }

        public function registreerValidatie()
        {
            /**
             * Valideert de validatie zodat er geregistreert kan worden.
             * in de view registreerValidatie.php
             */

            $data['titel'] = 'Registratie gelukt!';
            $data['gebruiker'] = $this->authex->getGebruikerInfo();
            $data['ontwerper'] = 'Seppe&nbsp;Peeters';
            $data['tester'] = 'Esteban&nbsp;Beerens';

            $partials = array('hoofding' => 'main_header',
                'inhoud' => 'gebruiker/registreerValidatie',
                'menu' => 'main_menu',
                'voetnoot' => 'main_footer');

            $this->template->load('main_master', $partials, $data);
        }

        public function registreerGebruiker() {

            /**
             * Maakt een nieuwe patient-record aan via Gebruiker_model en hiermee kan je inloggen
             * in de view registreer.php

             */

            $gebruiker = new stdClass();
            $gebruiker->voornaam = $this->input->post('voornaam');
            $gebruiker->naam = $this->input->post('naam');
            $gebruiker->geboortedatum = $this->input->post('geboortedatum');
            $gebruiker->email = $this->input->post('email');
            $gebruiker->woonplaats = $this->input->post('woonplaats');
            $gebruiker->postcode = $this->input->post('postcode');
            $gebruiker->adres = $this->input->post('adres');
            $gebruiker->gebruikersnaam = $this->input->post('gebruikersnaam');
            $gebruiker->passwoord = password_hash($this->input->post('passwoord'), PASSWORD_DEFAULT);
            $gebruiker->soortPersoonId = 2;

            $this->load->model('gebruiker_model');
            $this->gebruiker_model->insert($gebruiker);

            redirect('Gebruiker/registreerValidatie');
        }


        public function gebruikerBewerken($id){

            /**
             * bewerkt een  patient-record aan via Gebruiker_model en hiermee kan je inloggen
             * in de view gebruikerBewerken.php
             * * @param $id De id van de gebruiker die geüpdate gaat worden

             */

            $data['titel'] = 'Gebruiker Bewerken';
            $data['ontwerper'] = 'Tomas&nbsp;Marlein';
            $data['tester'] = 'vul mij in';
            $data['gebruiker'] = $this->authex->getGebruikerInfo();

            $this->load->model('gebruiker_model');

            $data['gebruiker'] = $this->gebruiker_model->getSpecificPersoon($id);


            $partials = array('hoofding' => 'main_header',
                'inhoud' => 'gebruiker/gebruikerBewerken',
                'menu' => 'main_menu',
                'voetnoot' => 'main_footer');

            $this->template->load('main_master', $partials, $data);
        }

        public function gebruikerUpdaten($id){

            /**
             * Bewerken van een specifiek gebruiker
             * @param $id gaat ervoor zorgen dat de gebruiker met een specifiek id geupdate gaat worden.
             */


            $gebruiker = new stdClass();
            $gebruiker->id = $id;
            $gebruiker->naam = $this->input->post('naam');
            $gebruiker->voornaam = $this->input->post('voornaam');
            $gebruiker->geboortedatum = $this->input->post('geboortedatum');
            $gebruiker->woonplaats = $this->input->post('woonplaats');
            $gebruiker->postcode = $this->input->post('postcode');
            $gebruiker->adres = $this->input->post('adres');
            $gebruiker->gebruikersnaam = $this->input->post('gebruikersnaam');
            $gebruiker->passwoord = password_hash($this->input->post('passwoord'), PASSWORD_DEFAULT);
            $gebruiker->email = $this->input->post('email');

            $this->load->model('gebruiker_model');
            $this->gebruiker_model->updaten($gebruiker);

            redirect('gebruiker/gebruikerBewerkenOK');
        }


        public function gebruikerBewerkenOK(){

            $data['titel'] = 'Gebruiker Succesvol bewerkt';
            $data['ontwerper'] = 'Tomas&nbsp;Marlein';
            $data['tester'] = 'vul mij in';
            $data['gebruiker'] = $this->authex->getGebruikerInfo();

            $this->load->model('gebruiker_model');

            $partials = array('hoofding' => 'main_header',
                'inhoud' => 'gebruiker/gebruikerBewerkenOK',
                'menu' => 'main_menu',
                'voetnoot' => 'main_footer');

            $this->template->load('main_master', $partials, $data);
        }



    }