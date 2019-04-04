<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 7/03/2019
 * Time: 12:51
 */


/**
 * @class PersoonEvenement_model
 * @brief Model-klasse voor PersoonEvenement
 *
 * Model-klasse die alle methodes bevat om te
 */

class PersoonEvenement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('persoonEvenement');
        return $query->row();
    }

    function getWherePersoonId($persoonId)
    {
        $this->db->where('persoonId', $persoonId);
        $query = $this->db->get('persoonEvenement');
        return $query->result();
    }

}