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
 * Model-klasse die alle methodes bevat om te interageren met de database-tabel persoonEvenement
 */

class PersoonEvenement_model extends CI_Model
{
    function __construct()
    {
        /**
         * Constructor
         */
        parent::__construct();
    }

    function get($id)
    {
        /**
         *  persoonEvenement gegevens oproepen en tonen na het klikken op het bepaalde persoonEvenement
         * @param $id gaat een speciefiek persoonEvenement oproepen.
         * @return Het opgevraagde record
         */
        $this->db->where('id', $id);
        $query = $this->db->get('persoonEvenement');
        return $query->row();
    }

    function getEvenementWherePersoonId($persoonId)
    {
        /**
         * Evenementen van persoon ophalen en tonen op pagina laadevenement
         */
        $this->db->where('persoonId', $persoonId);
        $query = $this->db->get('persoonEvenement');
        $evenementen = $query->result();
        $evenementenlijst = array();

        foreach($evenementen as $evenement){

            $evenementId = $evenement->evenementId;

            $evenementPatient = $this->getEvenementenById($evenementId);
            array_push($evenementenlijst, $evenementPatient);
        }


        return $evenementenlijst;    }

    function getEvenementenById($evenementId){

        $condities = array('id' => $evenementId);
        $this->db->where($condities);
        $query = $this->db->get('evenement');


        return $query->result();
    }

    function getWherePersoonId($persoonId)
    {
        /**
         * Evenementen van personen ophalen en tonen op pagina agenda beheren
         */

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
        /**
         * persoonEvenement toevoegen via pagina agenda toevoegen
         */
        $agenda = new stdClass();
        $agenda->persoonId = $persoonId;
        $agenda->evenementId = $evenementId;

        $this->db->insert('persoonEvenement',$agenda);
        return $this->db->insert_id();
    }
    function updaten($persoonEvenement)
    {
        /**
         * persoonEvenement updaten via pagina agenda bewerken
         */
        $this->db->where('id', $persoonEvenement->id);
        $this->db->update('persoonEvenement', $persoonEvenement);
    }
    function deleten($id)
    {
        /**
         * persoonEvenement verwijderen via pagina agenda beheren
         */
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