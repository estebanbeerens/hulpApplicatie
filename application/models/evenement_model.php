<?php
/**
 * Created by PhpStorm.
 * User: LiamM
 * Date: 27-2-2019
 * Time: 18:42
 */

class evenement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getEvenement()
    {
        $this->db->where('id', 1);
        $query = $this->db->get('evenement');
        return $query->result();
    }

}