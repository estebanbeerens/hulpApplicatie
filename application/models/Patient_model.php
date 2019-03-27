<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 7/03/2019
 * Time: 12:51
 */


/**
 * @class Patient_model
 * @brief Model-klasse voor patienten
 *
 * Model-klasse die alle methodes bevat om te
 */
class Patient_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function getPatient()
    {
        $this->db->order_by("naam", "asc");
        $this->db->where('soortPersoonId', 4);
        $query = $this->db->get('persoon');
        return $query->result();
    }

    function getPatientById($id)
    {
        /**Klopt nog niet, chill*/
        $array = array('id' => $id,'soortPersoonId' => 5);
        $this->db->where('id', $id);
        $query = $this->db->get('persoon');
        return $query->row();
    }
}