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
class Barcodetestcontroller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('patient_registration_model');
    }

    public function index() {
       // $this->load->view('barcodetest');
       $this->barcode();
    }
    
    public function barcode(){
         $this->load->view('barcodetest');
    }
    
    
}