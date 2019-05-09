<?php
/**
 * Created by PhpStorm.
 * User: LiamM
 * Date: 18-3-2019
 * Time: 15:59
 *
 * @class Verzorger_model
 * @brief Model-klasse voor verzorgers
 *
 * Model-klasse die alle methodes bevat om te interageren met de
 * database-tabel persoon
 */
/**
 * @class Verzorger_model
 * @brief Model-klasse voor Verzorger
 *
 * Model-klasse die alle methodes bevat om te interageren met de database-tabel persoon waar de soortPersoonId 3 is
 */
class Verzorger_model extends CI_Model
{
    public function __construct()
    {
        /**
         * Constructor
         */
        parent::__construct();
    }


    function getVerzorger()
    {
        /**
         * Haalt de de personen met de soortPersoonId 3 (= verzorger) uit de tabel persoon
         * @return de gevraagde records
         */
        $this->db->where('soortPersoonId', 3);
        $query = $this->db->get('persoon');
        return $query->result();

    }


    function insert($naam,$voornaam,$geboortedatum,$woonplaats,$adres,$gebruikersnaam,$passwoord,$email)
    {
        /**
         * Maakt een nieuwe verzorger in de database-tabel persoon  met soortPersoonId = 3
         * @param $naam,$voornaam,$geboortedatum,$woonplaats,$adres,$gebruikersnaam,$passwoord,$email gaan opgeven welke waarde er moet gegeven worden aan de verzorger
         */

        $verzorger = new stdClass();
        $verzorger->naam = $naam;
        $verzorger->voornaam = $voornaam;
        $verzorger->geboortedatum = $geboortedatum;
        $verzorger->woonplaats = $woonplaats;
        $verzorger->adres = $adres;
        $verzorger->gebruikersnaam = $gebruikersnaam;
        $verzorger->passwoord = $passwoord;
        $verzorger->email = $email;
        $verzorger->soortPersoonId = 3;

        $this->db->insert('persoon',$verzorger);
        return $this->db->insert_id();
    }


    function updaten($verzorger)
    {
        /**
         * Update de gegevens van de verzorger uit de tabel persoon
         * @param $verzorger De verzorger die geüpdatet gaat worden
         */
        $this->db->where('id', $verzorger->id);
        $this->db->update('persoon', $verzorger);
    }

    function deleten($id)
    {
        /**
         * Verwijdert de verzorger uit de tabel persoon
         * @param $id De id van de verzorger die verwijderd gaat worden
         */
        $this->db->where('id',$id);
        $this->db->delete('persoon');
    }


    function getSpecificVerzorger($id)
    {
        /**
         * @param $id De id om een specifieke verzorger te bewerken
         * @return Het opgevraagde record
         */
        $this->db->where('id', $id);
        $query = $this->db->get('persoon');
        return $query->row();
    }


}