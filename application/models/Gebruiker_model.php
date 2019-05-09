<?php
/**
 * @class Gebruiker_model
 * @brief Model-klasse voor Gebruiker
 *
 * Model-klasse die alle methodes bevat om te interageren met de database-tabel persoon
 */
class gebruiker_model extends CI_Model
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
         * geef gebruiker-object met opgegeven $id
         * @param $id de id van het record dat opgpevraagd wordt
         * @return het opgevraade record
         */
        $this->db->where('id', $id);
        $query = $this->db->get('persoon');
        return $query->row();
    }

    function getGebruiker($gebruikersnaam, $passwoord)
    {
        /**
         * geef gebruiker-object met $email en $wachtwoord EN geactiveerd = 1
         * @param $gebruikersnaam de gebruikersnaam van de gewenste persoon
         * @param $passwoord het passwoord van de gewenste gebruiker
        */
        $this->db->where('gebruikersnaam', $gebruikersnaam);
        $query = $this->db->get('persoon');

        if ($query->num_rows() == 1) {
            $gebruiker = $query->row();
            /**
            * controleren of het wachtwoord overeenkomt
            */
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
        /**
         * Meld de gewenste persoon aan
         * @param $id de id van de persoon die aangemeld wordt
         */
        $patient = new stdClass();
        $patient->isAangemeld = 1;
        $this->db->where('id', $id);
        $this->db->update('persoon', $patient);
    }

    function controleerEmailVrij($email)
    {
        /**
         * is email al dan niet aanwezig
         * @param $email het emailadres van persoon
         */
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

        /**
         * Persoon toevoegen in de databank om te kunnen inloggen
         * @param $persoon de gegevens van een persoon die toegevoegd worden
         */
        $this->db->insert('persoon', $persoon);
        return $this->db->insert_id();
    }

    function updateGeactiveerd($id)
    {
        /**
         * zet geactiveerd op 1
         * @param $id de id van de persoon die ingelogd word
         */
        $gebruiker = new stdClass();
        $gebruiker->geactiveerd = 1;
        $this->db->where('id', $id);
        $this->db->update('persoon', $gebruiker);
    }

    function getPersoon($id) {
        /**
         * ophalen gegevens van een persoon
         * @param $id de id van de gevraagde personen
         * @return de gevraagde records
         */
        $this->db->where('id', $id);
        $query = $this->db->get('persoon');
        return $query->result();
    }


    function getSpecificPersoon($id) {

        /**
         *Ophalen gegevens van een persoon om deze te bewerken
         * @param $id de id van de gevraagde persoon
         * @ return het gevraagde record
         */
        $this->db->where('id', $id);
        $query = $this->db->get('persoon');
        return $query->row();
    }


    function updaten($gebruiker)
    {

        /**
         * Het updaten van een gebruiker in de database
         * @param $gebruiker geeft de waarde mee die bepaald zijn voor een gebruiker te kunnen updaten.
         */
        $this->db->where('id', $gebruiker->id);
        $this->db->update('persoon', $gebruiker);
    }






}
?>
