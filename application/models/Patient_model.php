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
    function getPatientenPatientEvenement(){
        $this->db->where('soortPersoonId', 4);
        $this->db->order_by('naam', 'asc');
        $query = $this->db->get('persoon');
        $personen = $query->result();
        $this->load->model('PersoonEvenement_model');
        $this->load->model('Evenement_model');
        foreach($personen as $persoon){
            $persoon->persoonEvenementen = $this->PersoonEvenement_model->getWherePersoonId($persoon->id);
            foreach($persoon->persoonEvenementen as $evenement){
                $evenement->evenement= $this->Evenement_model->getEvenementPersoon($evenement->evenementId);
            }
        }
        return $personen;
    }


    function getPatientById($id)
    {
        /**Klopt nog niet, chill*/
        $array = array('id' => $id,'soortPersoonId' => 5);
        $this->db->where('id', $id);
        $query = $this->db->get('persoon');
        return $query->row();
    }

    function insert($naam,$voornaam,$geboortedatum,$woonplaats,$adres,$rekeningnummer,$gebruikersnaam,$passwoord,$email)
    {
        $patient = new stdClass();

        $patient->naam = $naam;
        $patient->voornaam = $voornaam;
        $patient->geboortedatum = $geboortedatum;
        $patient->woonplaats = $woonplaats;
        $patient->adres = $adres;
        $patient->rekeningnummer = $rekeningnummer;
        $patient->gebruikersnaam = $gebruikersnaam;
        $patient->passwoord = password_hash($passwoord, PASSWORD_DEFAULT);
        $patient->email = $email;
        $patient->soortPersoonId = 4;

        $this->db->insert('persoon',$patient);
        return $this->db->insert_id();
    }
    function getSpecificPatient($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('persoon');
        return $query->row();
    }



    function deleten($id)
    {

        /**
         * Het verwijderen van een evenement uit de database
         */

        $this->db->where('id',$id);
        $this->db->delete('persoon');

    }
    function update($patient)
    {

        /**
         * Het updaten van een evenement in het database
         */


        $this->db->where('id', $patient->id);
        $this->db->update('persoon', $patient);
    }
    function updaten($naam,$voornaam,$geboortedatum,$woonplaats,$adres,$rekeningnummer,$gebruikersnaam,$passwoord,$email)
    {
        $patient = new stdClass();
        $patient->id = $id;
        $patient->naam = $naam;
        $patient->voornaam = $voornaam;
        $patient->geboortedatum = $geboortedatum;
        $patient->woonplaats = $woonplaats;
        $patient->adres = $adres;
        $patient->rekeningnummer = $rekeningnummer;
        $patient->gebruikersnaam = $gebruikersnaam;
        $patient->passwoord = $passwoord;
        $patient->email = $email;

        $this->db->where('id',$id);
        $this->db->update('persoon',$patient);
    }

    function patientAfmelden($id, $patient){


        $this->db->where('id', $id);
        $this->db->update('persoon', $patient);
    }
}