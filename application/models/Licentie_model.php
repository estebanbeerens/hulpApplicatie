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
     * Model-klasse die alle methodes bevat om te
     */

    class Licentie_model extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }

        function getLicentie()
        {
            $query = $this->db->get('soortLicentie');
            return $query->result();
        }

        function getSpecificLicentie($id) {
            $this->db->where('id', $id);
            $query = $this->db->get('soortLicentie');
            return $query->row();
        }

        function insert($soortLicentie) {
            $this->db->insert('soortLicentie', $soortLicentie);
            return $this->db->insert_id();
        }

        function update($soortLicentie) {
            $this->db->where('id', $soortLicentie->id);
            $this->db->update('soortLicentie', $soortLicentie);
        }

        function delete($id) {
            $this->db->where('id', $id);
            $this->db->delete('soortLicentie');
        }
    }