<?php
/**
 * Created by PhpStorm.
 * User: LiamM
 * Date: 18-3-2019
 * Time: 15:59
 */

class Verzorger_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function getVerzorger()
    {
        $this->db->where('soortPersoonId', 3);
        $query = $this->db->get('persoon');
        return $query->result();

    }


}