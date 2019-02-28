<?php
/**
 * Created by PhpStorm.
 * User: tomas
 * Date: 28/02/2019
 * Time: 14:02
 */

class EvenementBeheren extends CI_Controller
{
    public function toonEvenement()
    {
        $data['titel'] = 'Evenement Beheren';


        $this->load->model('evenement_model');
        $data['evenement'] =$this->evenement_model->getEvenement();
        $partials = array('hoofding' => 'main_header',
            'menu' => 'main_menu',
            'inhoud' => 'evenementBeheren',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
}