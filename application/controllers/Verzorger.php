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

        $this->load->model('verzorger_model');
    }

}