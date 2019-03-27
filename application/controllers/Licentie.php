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

    public function licentieAankopen()
    {
        $data['titel'] = 'Licentie aankopen';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'vul mij in';

        $this->load->model('licentie_model');
        $data['licentie'] = $this->licentie_model->getLicentie();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieAankopen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function licentieToevoegen() {
        $data['titel'] = 'Licentie Toevoegen';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'vul mij in';

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieToevoegen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function licentieBeheren() {
        $data['titel'] = 'Licenties Beheren';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'vul mij in';

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieBeheren',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function insertLicentie() {

        $soortLicentie = new stdClass();
        $soortLicentie->naam = $this->input->post('naam');
        $soortLicentie->prijs = $this->input->post('prijs');
        $soortLicentie->beschrijving = $this->input->post('beschrijving');

        $this->load->model('licentie_model');
        $this->licentie_model->insert($soortLicentie);

        redirect('Licentie/licentieToevoegenValidatie');
    }

    public function licentieToevoegenValidatie()
    {
        $data['titel'] = "Licentie toegevoegd";
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'vul mij in';

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieToevoegenOk',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
}