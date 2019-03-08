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
        $array = array('id' => 1, 'soortPersoonId' => 5);
        $this->db->where($array);
        $query = $this->db->get('persoon');
        return $query->result();
    }

    function getPatientById($id)
    {
        /**Klopt nog niet, chill*/
        $this->db->where('id', $id);
        $query = $this->db->get('persoon');
        return $query->row();
    }
}