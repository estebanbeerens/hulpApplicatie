<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    /**
     * @property Template $template
     * @property Authex $authex
     * @property Gebruiker_model $gebruiker_model
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
            $gebruiker = new stdClass();
            $gebruiker->voornaam = $this->input->post('voornaam');
            $gebruiker->naam = $this->input->post('naam');
            $gebruiker->geboortedatum = $this->input->post('geboortedatum');
            $gebruiker->email = $this->input->post('email');
            $gebruiker->woonplaats = $this->input->post('woonplaats');
            $gebruiker->adres = $this->input->post('adres');
            $gebruiker->gebruikersnaam = $this->input->post('gebruikersnaam');
            $gebruiker->passwoord = password_hash($this->input->post('passwoord'), PASSWORD_DEFAULT);

            $this->load->model('gebruiker_model');
            $this->gebruiker_model->insert($gebruiker);

            redirect('Gebruiker/registreerValidatie');
        }
    }