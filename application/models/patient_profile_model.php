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
class patient_profile_model extends CI_Model {

    public function loadprofile() {

        $this->db->select('P_ID, patient_first_name, patient_gender, patient_main_reason');
        $this->db->where('check_status', '1');
        $query = $this->db->get('tbl_patients_queue');
        return $query->result();
    }

    public function loadPatiens($pid) {

        $querdata = "select * from tbl_patients_queue a,tbl_patient_dental_history b,tbl_patient_health c where a.P_ID=b.p_id and a.P_ID=c.p_id and a.P_ID='$pid';";
        $query = $this->db->query($querdata);
        return $query->result();
    }

    
    
}
