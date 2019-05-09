<?php
    /**
     * Created by PhpStorm.
     * User: Esteban
     * Date: 14/03/2019
     * Time: 14:35
     */

    /**
     * @class Patient_model
     * @brief Model-klasse voor patienten
     * Model-klasse die alle methodes bevat om te interageren met de database-tabel licentie
     */

    class Licentie_model extends CI_Model
    {
        function __construct()
        {
            /**
             * Constructor
             */
            parent::__construct();
        }

        function getLicentie() {
            /**
             * Licenties ophalen uit de database
             * @return de gevraagde records
             */
            $query = $this->db->get('soortLicentie');
            return $query->result();
        }

        function getAangekochteLicentie() {
            /**
             * Aangekochte licenties ophalen uit de database
             * @return de gevraagde records
             */
            $query = $this->db->get('aangekochteLicentie');
            return $query->result();
        }

        function getSpecificLicentie($id) {
            /**
             * Specifieke licentie ophalen uit database
             * @param $id de id van de gevraagde licentie
             * @return het gevraagde record
             */
            $this->db->where('id', $id);
            $query = $this->db->get('soortLicentie');
            return $query->row();
        }

        function getSpecificAangekochteLicentie($id) {
            /**
             * Specifieke aangekochte licentie ophalen uit database
             * @param $id de id van de gevraagde licentie
             * @return het gevraagde record
             */
            $this->db->where('id', $id);
            $query = $this->db->get('aangekochteLicentie');
            return $query->row();
        }

        function insert($soortLicentie) {
            /**
             * Licentie toevoegen in database
             * @param $soortLicentie de gegevens die toegevoegd moeten worden in de database
             *
             */
            $this->db->insert('soortLicentie', $soortLicentie);
            return $this->db->insert_id();
        }

        function update($soortLicentie) {
            /**
             * Licentie updaten in de database
             * @param $soortLicentie de gegevens die toegevoegd moeten worden in de database
             */
            $this->db->where('id', $soortLicentie->id);
            $this->db->update('soortLicentie', $soortLicentie);
        }

        function delete($id) {
            /**
             * Licentie verwijderen uit database
             * @param $id de id van de gevraagde licentie
             */
            $this->db->where('id', $id);
            $this->db->delete('soortLicentie');
        }
    }