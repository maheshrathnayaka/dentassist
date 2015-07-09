<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of patient_registration_model
 *
 * @author Hasith Malinga
 */
class patient_registration_model extends CI_Model {

    function insert_patient($data) {
        $this->db->insert('tbl_patient', $data);
        return $this->db->insert_id();
        //return true;
    }

    function insert_patient_queue($data) {
        $this->db->insert('tbl_patients_queue', $data);
        return $this->db->insert_id();
        //return true;
    }

    function insert_patient_contacts($data) {
        $this->db->insert('tbl_patient_contacts', $data);
        return $this->db->insert_id();
    }

    function insert_patient_address($data) {
        $this->db->insert('tbl_patient_address', $data);
        return $this->db->insert_id();
    }

    function insert_patient_details($data) {
        $this->db->insert('tbl_patient_health', $data);
        return $this->db->insert_id();
    }

    function insert_health_history($data) {
        $this->db->insert('tbl_patient_dental_history', $data);
        return $this->db->insert_id();
        // echo $this->db->last_query(); // this will echo last executed query 
    }

    function insert_past_treatments($data, $p_id) {
        $this->db->where('p_id', $p_id);
        return $this->db->update('tbl_patient_dental_history', $data);
    }

    function insert_womens_health($data, $p_id) {
        $this->db->where('p_id', $p_id);
        return $this->db->update('tbl_patient_dental_history', $data);
    }

}

?>
