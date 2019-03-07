<?php

class evenement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getEvenement()
    {
        $sql = "SELECT * FROM evenement";
        $this->db->query($sql);
        $query = $this->db->get('evenement');
        return $query->result();
    }

    function getEvenementById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('evenement');
        return $query->row();
    }

    function toevoegenEvenement()
    {


    }

    function insert($naam, $meldingtijd, $beschrijving, $locatie,$verplicht,$isHerhaling,$datum,$startTijd,$eindTijd)
    {
        // voeg nieuwe gebruiker toe
        $evenement = new stdClass();
        $evenement->naam = $naam;
        $evenement->meldingTijd = $meldingtijd;
        $evenement->beschrijving = $beschrijving;
        $evenement->locatie = $locatie;
        $evenement->verplicht = $verplicht;
        $evenement->isHerhaling = $isHerhaling;
        $evenement->datum = $datum;
        $evenement->startTijd = $startTijd;
        $evenement->eindTijd = $eindTijd;
        $this->db->insert('evenement', $evenement);
        return $this->db->insert_id();
    }
    function  evenementUpdaten($id, $naam, $beschrijving, $startTijd, $eindTijd, $locatie){

        // zet geactiveerd op 1
        $evenement = new stdClass();
        $evenement->naam = $naam;
        $evenement->beschrijving = $beschrijving;
        $evenement->startTijd = $startTijd;
        $evenement->eindTijd = $eindTijd;
        $evenement->locatie = $locatie;
        $this->db->where('id', $id);
        $this->db->update('evenement', $evenement);
    }

}