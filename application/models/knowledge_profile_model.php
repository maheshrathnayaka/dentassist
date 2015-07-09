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
 * @author Mahesh Rathnayaka
 */
class knowledge_profile_model extends CI_Model {

    public function get_medication_list() {
        $this->legacy_db = $this->load->database('knowledge', true);
        $this->legacy_db->select('medication_name');
        $this->legacy_db->from('medication');
        $query = $this->legacy_db->get();
        $result = $query->result_array();
        return $result;
    }
    
    public function get_medication_lists() {
        $this->db->select('medication_name')->from('medication');
        $query = $this->db->get();
        $result = $query->result();
        var_dump($result);
        return $result;
    }

}
