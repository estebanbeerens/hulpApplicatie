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
            'inhoud' => 'licentieAankopen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    public function licentieToevoegen() {
        $data['titel'] = 'Licentie Toevoegen';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'vul mij in';

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentieToevoegen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
}