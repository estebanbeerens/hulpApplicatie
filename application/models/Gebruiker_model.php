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



    function insert($naam, $email, $wachtwoord, $gebruikersnaam, $adres, $rekeningnummer, $voornaam, $woonplaats, $geboortedatum)
    {
        // voeg nieuwe gebruiker toe
        $gebruiker = new stdClass();
        $gebruiker->naam = $naam;
        $gebruiker->email = $email;
        $gebruiker->passwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);
        $gebruiker->gebruikersnaam = $gebruikersnaam;
        $gebruiker->woonplaats = $woonplaats;
        $gebruiker->geboortedatum = $geboortedatum;
        $gebruiker->voornaam = $voornaam;
        $gebruiker->rekeningnummer = $rekeningnummer;
        $gebruiker->adres = $adres;
        $this->db->insert('persoon', $gebruiker);
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

    function getPersoon($id){
        $this->db->where('id', $id);
        $query = $this->db->get('persoon');
        return $query->result();
    }
}

?>
