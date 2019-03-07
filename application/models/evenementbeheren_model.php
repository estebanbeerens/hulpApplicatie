<?php
/**
 * Created by PhpStorm.
 * User: tomas
 * Date: 7/03/2019
 * Time: 12:48
 */

class evenementbeheren_model
{

    function getEvenement()
    {
        $this->db->where('id', 1);
        $query = $this->db->get('evenement');
        return $query->result();
    }

    function evenementId($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('evenement');
        return $query->result();
    }



}