<?php
/**
 * @property evenement_model $evenement_model
 * @property  persoonevenement_model $persoonevenement_model
 */
class gebruiker_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get($id)
    {
        // geef gebruiker-object met opgegeven $id
        $this->db->where('id', $id);
        $query = $this->db->get('persoon');
        return $query->row();
    }

    function getGebruiker($gebruikersnaam, $passwoord)
    {
        // geef gebruiker-object met $email en $wachtwoord EN geactiveerd = 1
        $this->db->where('gebruikersnaam', $gebruikersnaam);
        $query = $this->db->get('persoon');

        if ($query->num_rows() == 1) {
            $gebruiker = $query->row();
            // controleren of het wachtwoord overeenkomt
            if (password_verify($passwoord, $gebruiker->passwoord)) {
                return $gebruiker;

            } else {
                return null;
            }
        } else {
            return null;
        }
    }

    function setAangemeld($id){
        $patient = new stdClass();
        $patient->isAangemeld = 1;
        $this->db->where('id', $id);
        $this->db->update('persoon', $patient);
    }

    function controleerEmailVrij($email)
    {
        // is email al dan niet aanwezig
        $this->db->where('email', $email);
        $query = $this->db->get('persoon');

        if ($query->num_rows() == 0) {
            return true;
        } else {
            return false;
        }
    }

    function insert($persoon)
    {
        $this->db->insert('persoon', $persoon);
        return $this->db->insert_id();
    }

    function updateGeactiveerd($id)
    {
        // zet geactiveerd op 1
        $gebruiker = new stdClass();
        $gebruiker->geactiveerd = 1;
        $this->db->where('id', $id);
        $this->db->update('persoon', $gebruiker);
    }

    function getPersoon($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('persoon');
        return $query->result();
    }


    function getSpecificPersoon($id) {

        /**
         *
         *
         */

        $this->db->where('id', $id);
        $query = $this->db->get('persoon');
        return $query->row();
    }








}
?>
