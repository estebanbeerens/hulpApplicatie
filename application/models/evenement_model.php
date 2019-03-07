<?php

class evenement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getEvenement()
    {
        $this->db->where('id', 1);
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

}