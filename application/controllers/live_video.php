<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Live_video
 *
 * @author Hasith Malinga
 */
class Live_video extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        //$this->load->model('patient_profile_model');
    }

    public function index() {
        $this->load->view('live_stream_view');
    }

}
