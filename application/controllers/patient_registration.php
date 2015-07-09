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
class Patient_registration extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('patient_registration_model');
    }

    public function index() {
        $this->load->view('patient_registration_view');
    }

    public function register_patient() {
        $regId = NULL;

        //var_dump($data);
        if ($this->input->post('reset')) {
            redirect(base_url());
        }

        if ($this->input->post('register')) {

            $data = array(
                'patient_first_name' => $this->input->post('txtFirstName'),
                'patient_last_name' => $this->input->post('txtSurname'),
                'patient_gender' => $this->input->post('radGender'),
                'patient_occupation' => $this->input->post('txtOccupation'),
                'patient_allergies' => $this->input->post('txtAreaKnownAllergies'),
                'patient_email' => $this->input->post('txtEmail')
            );
            $regId = $this->patient_registration_model->insert_patient($data);

            $patient_address = array(
                'patient_id' => $regId,
                'postal_no' => $this->input->post('txtPostal'),
                'address_line1' => $this->input->post('txtAddress1'),
                'address_line2' => $this->input->post('txtAddress2'),
                'city' => $this->input->post('txtCity')
            );

            $patient_contacts = array(
                'patient_id' => $regId,
                'home_no' => $this->input->post('txtHomeTel'),
                'mobile_no' => $this->input->post('txtPostal'),
                'work_no' => $this->input->post('txtMobileTel')
            );

            $patient_health = array(
                'chkDiabetes' => $this->input->post('chkDiabetes'),
                'chkHighCholesterol' => $this->input->post('chkHighCholesterol'),
                'chkHighBloodPressure' => $this->input->post('chkHighBloodPressure'),
                'chkLowBloodPressure' => $this->input->post('chkLowBloodPressure'),
                'chkHeartburn' => $this->input->post('chkHeartburn'),
                'chkAnemia' => $this->input->post('chkAnemia'),
                'chkSwollen' => $this->input->post('chkSwollen'),
                'chkDepression' => $this->input->post('chkDepression'),
                'chkThyroid' => $this->input->post('chkThyroid'),
                'chkShortnessOfBreath' => $this->input->post('chkShortnessOfBreath'),
                'chkTonsillitis' => $this->input->post('chkTonsillitis'),
                'chkAsthma' => $this->input->post('chkAsthma'),
                'chkStroke' => $this->input->post('chkStroke'),
                'chkSinusProblems' => $this->input->post('chkSinusProblems'),
                'chkArthritis' => $this->input->post('chkArthritis'),
                'chkCancer' => $this->input->post('chkCancer'),
                'chkUlcers' => $this->input->post('chkUlcers'),
                'chkGastric' => $this->input->post('chkGastric'),
                'chkHeartDisease' => $this->input->post('chkHeartDisease'),
                'chkKidney' => $this->input->post('chkKidney'),
                'chkLung' => $this->input->post('chkLung'),
                'chkLiver' => $this->input->post('chkLiver'),
                'chkHeadaches' => $this->input->post('chkHeadaches'),
                'chkNeurological' => $this->input->post('chkNeurological'),
                'chkEyeDisorder' => $this->input->post('chkEyeDisorder'),
                'chkEarProblems' => $this->input->post('chkEarProblems'),
                'chkSeasonalAllergies' => $this->input->post('chkSeasonalAllergies')
            );

            $health_arr = json_encode($patient_health);

            $patient_details = array(
                'patient_id' => $regId,
                'questions' => $health_arr,
                'main_reason' => $this->input->post('txtAreaReasonForVisit'),
                'other' => $this->input->post('txtAreaOther')
            );

            $this->patient_registration_model->insert_patient_contacts($patient_contacts);
            $this->patient_registration_model->insert_patient_address($patient_address);
            $this->patient_registration_model->insert_patient_details($patient_details);

            $this->load->view('register_success_view');
        }

        if ($this->input->post('cancel')) {
            redirect(base_url());
        }
    }

}

?>
