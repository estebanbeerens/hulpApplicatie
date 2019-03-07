<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 7/03/2019
 * Time: 12:51
 */

class patient_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function getPatient()
    {
        $this->db->where('id', 1);
        $query = $this->db->get('persoon');
        return $query->result();
    }

    function getEvenementById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('persoon');
        return $query->row();
    }
}