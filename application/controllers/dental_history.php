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
 * @author Hasith Malinga
 */
class Dental_history extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('dental_history_view');
    }
}

?>
