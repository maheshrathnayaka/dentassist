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
 * @author Mahesh Rathnayaka
 */
class Patient_history extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('patient_history_model');
    }

    public function index() {
//        $data['query'] = $this->patient_history_model->loadprofile();
        $this->load->view('patient_history_view');
    }

}

