<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    /**
     * @property Template $template
     * @property Authex $authex
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
        $data['ontwerper'] = 'Esteban Beerens';
        $data['tester'] = 'VUL MIJ IN <3';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentieAankopen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
}