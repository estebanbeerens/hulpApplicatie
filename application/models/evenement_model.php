<?php

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

    function evenementId($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('evenement');
        return $query->result();
    }
}