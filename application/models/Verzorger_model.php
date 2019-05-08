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

    /**
     * Haalt de de personen met de soortPersoonId 3 (= verzorger) uit de tabel persoon
     *
     */
    function getVerzorger()
    {
        $this->db->where('soortPersoonId', 3);
        $query = $this->db->get('persoon');
        return $query->result();

    }

    /**
     * Maakt een nieuwe verzorger in de database-tabel persoon  met soortPersoonId = 3
     */
    function insert($naam,$voornaam,$geboortedatum,$woonplaats,$adres,$gebruikersnaam,$passwoord,$email)
    {

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

    /**
     * Update de gegevens van de verzorger uit de tabel persoon
     * @param $verzorger De verzorger die geüpdatet gaat worden
     */
    function updaten($verzorger)
    {
        $this->db->where('id', $verzorger->id);
        $this->db->update('persoon', $verzorger);
    }
    /**
     * Verwijdert de verzorger uit de tabel persoon
     * @param $id De id van de verzorger die verwijderd gaat worden
     */
    function deleten($id)
    {

        $this->db->where('id',$id);
        $this->db->delete('persoon');
    }

    /**
     * @param $id De id om een specifieke verzorger te bewerken
     * @return Het opgevraagde record
     */
    function getSpecificVerzorger($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('persoon');
        return $query->row();
    }


}