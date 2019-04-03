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
class Agenda_model
{
    function getAgendaPatient()
    {
        //$this->db->order_by("naam", "asc");
        //$this->db->where('soortPersoonId', 4);
        //$query = $this->db->get('persoon');
        //return $query->result();


        $query = $this->db->get('persoonEvenement');
        $agendas = $query->result();
        $this->load->model('Patient_model');

        foreach ($agendas as $agenda)
        {
            $agenda->agenda = $this->Patient_model->getPatient($agenda->id);

        }
        return $agendas;

        $this->db->order_by("naam", "asc");
        $this->db->where('soortPersoonId', 4);
        $query = $this->db->get('persoon');
        return $query->result();
    }
}