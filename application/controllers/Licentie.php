<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    /**
     * @property Template $template
     * @property Authex $authex
     * @property Licentie_model $licentie_model
     */

class Licentie extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function licentieAankopen() {
        $data['titel'] = 'LicentieAankopen';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'vul mij in';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('licentie_model');
        $data['licentie'] = $this->licentie_model->getLicentie();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieAankopen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function licentieAankopenBevestig($id) {
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'vul mij in';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('licentie_model');
        $data['licentie'] = $this->licentie_model->getSpecificLicentie($id);

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieAankopenBevestig',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function licentieAankopenOk($id) {
        $data['titel'] = 'Licentie aangekocht';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'vul mij in';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('licentie_model');
        $data['licentie'] = $this->licentie_model->getSpecificLicentie($id);

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieAankopenOk',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function licentieToevoegen() {
        $data['titel'] = 'Licentie Toevoegen';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'vul mij in';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieToevoegen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function insertLicentie() { //Licentie in database steken
        $soortLicentie = new stdClass();
        $soortLicentie->naam = $this->input->post('naam');
        $soortLicentie->prijs = $this->input->post('prijs');
        $soortLicentie->beschrijving = $this->input->post('beschrijving');

        $this->load->model('licentie_model');
        $this->licentie_model->insert($soortLicentie);

        redirect('Licentie/licentieToevoegenValidatie');
    }

    public function licentieToevoegenValidatie() { //Goedkeuring tonen
        $data['titel'] = "Licentie toegevoegd";
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'vul mij in';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieToevoegenOk',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function licentieBeheren() {
        $data['titel'] = 'Licenties Beheren';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'vul mij in';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('licentie_model');
        $data['licentie'] = $this->licentie_model->getLicentie();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieBeheren',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function licentieBewerken($id) {
        $data['titel'] = 'Licenties Beheren';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'vul mij in';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('licentie_model');
        $data['licentie'] = $this->licentie_model->getSpecificLicentie($id);

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieBewerken',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function updateLicentie($id) {
        $soortLicentie = new stdClass();
        $soortLicentie->id = $id;
        $soortLicentie->naam = $this->input->post('naam');
        $soortLicentie->prijs = $this->input->post('prijs');
        $soortLicentie->beschrijving = $this->input->post('beschrijving');

        $this->load->model('licentie_model');
        $this->licentie_model->update($soortLicentie);

        redirect('Licentie/updateLicentieValidatie');
    }

    public function verwijderLicentie($id) {
        $this->load->model('licentie_model');
        $data['licentie'] = $this->licentie_model->delete($id);

        redirect('/licentie/licentieBeheren');
    }

    public function updateLicentieValidatie() {
        $data['titel'] = "Licentie toegevoegd";
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'vul mij in';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieBewerkenOk',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }


    //Aangekochte licenties
    public function persoonlijkeAangekochteLicentieBeheren() {
        $data['titel'] = 'Aangekochte licenties beheren';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'vul mij in';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('licentie_model');
        $data['licentie'] = $this->licentie_model->getLicentie();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieAankopen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
}