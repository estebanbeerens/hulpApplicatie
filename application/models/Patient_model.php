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

    function insert($id,$naam,$voornaam,$geboortedatum,$woonplaats,$adres,$rekeningnummer,$gebruikersnaam,$passwoord,$email)
    {
        $verzorger = new stdClass();
        $verzorger->naam = $naam;
        $verzorger->voornaam = $voornaam;
        $verzorger->geboortedatum = $geboortedatum;
        $verzorger->woonplaats = $woonplaats;
        $verzorger->adres = $adres;
        $verzorger->rekeningnummer = $rekeningnummer;
        $verzorger->gebruikersnaam = $gebruikersnaam;
        $verzorger->passwoord = $passwoord;
        $verzorger->email = $email;

        $this->db->insert('persoon',$verzorger);
        return $this->db->insert_id();
    }

    function updaten($id,$naam,$voornaam,$geboortedatum,$woonplaats,$adres,$rekeningnummer,$gebruikersnaam,$passwoord,$email)
    {
        $verzorger = new stdClass();
        $verzorger->id = $id;
        $verzorger->naam = $naam;
        $verzorger->voornaam = $voornaam;
        $verzorger->geboortedatum = $geboortedatum;
        $verzorger->woonplaats = $woonplaats;
        $verzorger->adres = $adres;
        $verzorger->rekeningnummer = $rekeningnummer;
        $verzorger->gebruikersnaam = $gebruikersnaam;
        $verzorger->passwoord = $passwoord;
        $verzorger->email = $email;

        $this->db->where('id',$id);
        $this->db->update('persoon',$verzorger);
    }
}