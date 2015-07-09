<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Patient_registration
 *
 * @author Hasith Malinga
 */
class Patient_profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('patient_profile_model');
    }

    public function index() {
        $data['query'] = $this->patient_profile_model->loadprofile();
        $this->load->view('patient_profile_view',$data);
        
    }
    
    public function loadPatienDetails($pid){
        $data['query'] = $this->patient_profile_model->loadPatiens($pid);
        $this->load->view('patient_profile_view',$data);
        
    }
    
   
}
 ?>
