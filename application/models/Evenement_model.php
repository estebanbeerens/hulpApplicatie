<?php

class evenement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getEvenement()
    {
        /**
         * Evenementen ophalen en tonen op pagina Evenement beheren
         */

        $query = $this->db->get('evenement');
        return $query->result();
    }

    function getEvenementById($id){

        /**
         *  Evenement gegevens oproepen en en tonen na het klikken op de een bepaalde evenement
         */

        $event->id = $id;

        $query = $this->db->get('evenement')->where('id', $id);
        return $query->result();
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

        /**
         * Het updaten van een evenement in het database
         */

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

        $this->db->where('id', $id)->update('evenement', $evenement);
    }

    function deleten($id)
    {

        /**
         * Het verwijderen van een evenement uit de database
         */

        $this->db->where('id',$id);
        $this->db->delete('evenement');

    }

}