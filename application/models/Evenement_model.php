<?php

class evenement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getEvenement()
    {
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

    function updaten($id, $naam, $meldingTijd, $beschrijving, $locatie, $verplicht, $isHerhaling, $datum, $startTijd, $eindTijd)
    {


        $evenement = new stdClass();
        $evenement->id = $id;
        $evenement->naam = $naam;
        $evenement->meldingTijd = $meldingTijd;
        $evenement->beschrijving = $beschrijving;
        $evenement->locatie = $locatie;
        $evenement->verplicht = $verplicht;
        $evenement->isHerhaling = $isHerhaling;
        $evenement->datum = $datum;
        $evenement->startTijd = $startTijd;
        $evenement->eindTijd = $eindTijd;

        $this->db->where('id', $id)->replace('evenement', $evenement);
    }

}