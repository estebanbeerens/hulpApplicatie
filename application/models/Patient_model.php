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
 * Model-klasse die alle methodes bevat om te interageren met de database-tabel persoon waar soortPersoonId 4 is
 */
class Patient_model extends CI_Model
{
    function __construct()
    {
        /**
         * Constructor
         */
        parent::__construct();
    }
    function getPatient()
    {
        /**
         * Alle patienten ophalen
         * @return de gevraagde records
         */
        $this->db->order_by("naam", "asc");
        $this->db->where('soortPersoonId', 4);
        $query = $this->db->get('persoon');
        return $query->result();
    }
    function getPatientenPatientEvenement(){
        /**
         * Alle evenementen ophalen die aan een patient gelinkt zijn
         * @return de gevraagde records
         */
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







    function insert($naam,$voornaam,$geboortedatum,$woonplaats,$adres,$gebruikersnaam,$passwoord,$email)
    {
        /**
         * //Het toevoegen van een patiënt in de database
         * @param $naam,$voornaam,$geboortedatum,$woonplaats,$adres,$gebruikersnaam,$passwoord,$email gaan opgeven welke waarde er moet gegeven worden aan de patient
         */

        $patient = new stdClass();

        $patient->naam = $naam;
        $patient->voornaam = $voornaam;
        $patient->geboortedatum = $geboortedatum;
        $patient->woonplaats = $woonplaats;
        $patient->adres = $adres;
        $patient->gebruikersnaam = $gebruikersnaam;
        $patient->passwoord = password_hash($passwoord, PASSWORD_DEFAULT);
        $patient->email = $email;
        $patient->soortPersoonId = 4;

        $this->db->insert('persoon',$patient);
        return $this->db->insert_id();
    }
    function getSpecificPatient($id) {
        /**
         * Een specifieke patient ophalen
         * @param $id de id van de patient die opgevraagd wordt
         * @return het gevraagde record
         */
        $this->db->where('id', $id);
        $query = $this->db->get('persoon');
        return $query->row();
    }



    function deleten($id)
    {

        /**
         * Het verwijderen van een patiënt uit de database
         * @param $id de id van de gevraagde patient
         */

        $this->db->where('id',$id);
        $this->db->delete('persoon');

    }
    function update($patient)
    {

        /**
         * Het updaten van een patiënt in het database
         * @param $patient de gegevens van patient die geupdate worden
         */


        $this->db->where('id', $patient->id);
        $this->db->update('persoon', $patient);
    }
    function updaten($naam,$voornaam,$geboortedatum,$woonplaats,$adres,$gebruikersnaam,$passwoord,$email)
    {
        $patient = new stdClass();
        $patient->id = $id;
        $patient->naam = $naam;
        $patient->voornaam = $voornaam;
        $patient->geboortedatum = $geboortedatum;
        $patient->woonplaats = $woonplaats;
        $patient->adres = $adres;
        $patient->gebruikersnaam = $gebruikersnaam;
        $patient->passwoord = $passwoord;
        $patient->email = $email;
        $this->db->where('id',$id);
        $this->db->update('persoon',$patient);
    }

    function patientAfmelden($id, $patient){
        /**
         * Een patient afmelden via de database
         * @param $id de id van de gevraagde patient
         * @param $patient de patient afmelden
         */

        $this->db->where('id', $id);
        $this->db->update('persoon', $patient);
    }
}