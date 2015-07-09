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
class Malocclusion_3dsimulate extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        
    }

    public function index() {
        
        $this->load->view('malocclusion_simulate_view');  
    }
    
    public function classBmiled(){
        $this->load->view('3dviews/classBmiled.html');  
    }
    
     public function classBmoderate(){
        $this->load->view('3dviews/classBmoderate.html');  
    }

    public function classBsevere(){
        $this->load->view('3dviews/classBsevere.html');  
    }
    
     public function classCmiled(){
        $this->load->view('3dviews/classcmiled.html');  
    }
    
     public function classCmoderate(){
        $this->load->view('3dviews/classcmoderate.html');  
    }

    public function classCsevere(){
        $this->load->view('3dviews/classcsevere.html');  
    }
    
     public function classDmiled(){
        $this->load->view('3dviews/classDmiled.html');  
    }
    
     public function classDmoderate(){
        $this->load->view('3dviews/classDmoderate.html');  
    }

    public function classDsevere(){
        $this->load->view('3dviews/classDsevere.html');  
    }
    
    
}

