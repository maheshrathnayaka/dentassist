<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dental_history
 *
 * @author Mahesh Rathnayaka
 */
class Knowledge_profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('knowledge_profile_model');
    }

    public function index() {
        $this->load->view('knowledge_profile_view');
    }

    public function addRecord() {
        $this->load->view('knowledge_profile_success_view');
    }

    public function loadMedication() {
//        $this->load->model('knowledge_profile_model');
        $data['medications'] = $this->knowledge_profile_model->get_medication_lists();
//        $data['medications'] = $this->knowledge_profile_model->get_medication_list();
//        var_dump($data);
//        return $data['medications'];
        $this->output->set_content_type('application/json');
        return $this->output->set_output(json_encode($data));
//        $this->load->view('gallary_view_ajax', $data);
    }

}

?>