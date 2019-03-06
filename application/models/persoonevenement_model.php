<?php
/**
 * Created by PhpStorm.
 * User: LiamM
 * Date: 6-3-2019
 * Time: 14:26
 */

class persoonevenement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get($id)
    {
        // geef gebruiker-object met opgegeven $id
        $this->db->where('id', $id);
        $query = $this->db->get('persoonEvenement');
        return $query->row();
    }

    function getPersoonId($persoonId)
    {
        $this->db->where('persoonId', $persoonId);
        $query = $this->db->get('persoonEvenement');
        return $query->result();
    }
}