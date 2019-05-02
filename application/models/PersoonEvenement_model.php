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
    function getWhereEvenementId($evenementId){
        $this->db->where('evenementId', $evenementId);
        $query = $this->db->get('persoonEvenement');
        return $query->result();
    }
    function insert($persoonId, $evenementId)
    {
        $agenda = new stdClass();
        $agenda->persoonId = $persoonId;
        $agenda->evenementId = $evenementId;

        $this->db->insert('persoonEvenement',$agenda);
        return $this->db->insert_id();
    }
    function updaten($persoonEvenement)
    {
        $this->db->where('id', $persoonEvenement->id);
        $this->db->update('persoonEvenement', $persoonEvenement);
    }
    function deleten($id)
    {

        $this->db->where('id',$id);
        $this->db->delete('persoonEvenement');
    }
    function getPersoonEvenement($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('persoonEvenement');
        return $query->row();
    }

}