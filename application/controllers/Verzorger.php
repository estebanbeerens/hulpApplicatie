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

}