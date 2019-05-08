<?php
/**
 * @class Evenement_model
 * @brief Model-klasse voor Evenement
 *
 * Model-klasse die alle methodes bevat om te interageren met de database-tabel evenement
 */
class evenement_model extends CI_Model
{
    function __construct()
    {
        /**
         * Constructor
         */
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
         * @param $id gaat een speciefiek evenement oproepen.
         * @return Het opgevraagde record
         */
        $event = new stdClass();
        $event->id = $id;

        $query = $this->db->get('evenement')->where('id', $id);
        return $query->result();
    }

    function toevoegenEvenement()
    {


    }

    function insert($naam, $meldingtijd, $beschrijving, $locatie,$verplicht,$isHerhaling,$datum,$startTijd,$eindTijd)
    {

        /**
         *  Evenement gegevens oproepen en en tonen na het klikken op het bepaalde evenement
         * @param $naam, $meldingtijd, $beschrijving, $locatie, $verplicht, $isHerhaling, $datum, $startTijd, $eindTijd gaan opgeven welke waarde er moet gegeven worden aan het evenement
         */

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

    function updaten($evenement)
    {

        /**
         * Het updaten van een evenement in het database
         * @param $evenement geeft de waarde mee die bepaald zijn voor een evenement te kunnen updaten.
         */


        $this->db->where('id', $evenement->id);
        $this->db->update('evenement', $evenement);
    }

    function deleten($id)
    {

        /**
         * Het verwijderen van een evenement uit de database
         * @param $id gaat het id meegeven van het evenement dat verwijderd moet worden uit de database.
         */

        $this->db->where('evenementId',$id);
        $this->db->delete('persoonEvenement');

        $this->db->where('id',$id);
        $this->db->delete('evenement');





    }


    function getSpecificEvenement($id) {

        /**
         * Het ophalen van een specifiek evenement uit de databasee
         * @param $id gaat het id meegeven van het evenement dat uit de database gehaald moet worden.
         */

        $this->db->where('id', $id);
        $query = $this->db->get('evenement');
        return $query->row();
    }


    function getPatientenPatientEvenement(){



        $this->db->where('soortPersoonId', 4);
        $this->db->order_by('naam', 'asc');
        $query = $this->db->get('persoon');
        $personen = $query->result();
        $this->load->model('PersoonEvenement_model');

        foreach($personen as $persoon){
            $persoon->persoonEvenement = $this->PersoonEvenement_model->getWherePersoonId($persoon->id);
        }
        return $personen;
    }
    function getEvenementenPersoonEvenement(){
        $query = $this->db->get('evenement');
        $evenementen = $query->result();
        $this->load->model('PersoonEvenement_model');

        foreach($evenementen as $evenement){
            $evenement->persoonEvenement = $this->PersoonEvenement_model->getWhereEvenementId($evenement->id);
        }
        return $evenementen;
    }
    function getEvenementPersoon($evenementId){
        $this->db->where('id', $evenementId);
        $query = $this->db->get('evenement');

        return $query->row();

    }

}