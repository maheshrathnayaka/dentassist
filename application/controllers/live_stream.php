<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Live_stream
 *
 * @author Hasith Malinga
 */

class Live_stream extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        //$this->load->model('patient_profile_model');
    }

    public function index() {
        if($this->input->post('submit')){
            $this->load->view('online_users_view'); 
        }
               
    }
}