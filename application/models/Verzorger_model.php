<?php
/**
 * Created by PhpStorm.
 * User: LiamM
 * Date: 18-3-2019
 * Time: 15:59
 */

class Verzorger_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function getVerzorger()
    {
        $this->db->where('soortPersoonId', 3);
        $query = $this->db->get('persoon');
        return $query->result();

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