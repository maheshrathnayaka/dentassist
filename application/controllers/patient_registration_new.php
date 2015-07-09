<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Patient_registration_new
 *
 * @author Mahesh Rathnayaka
 */
class Patient_registration_new extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('patient_registration_model');
    }

    public function index() {
        $this->load->view('patient_registration_new_view');
    }

    public function registerPatient() {

        //if ($this->input->post('register')) {
//        $firstname = $this->input->post('txtFirstName');
//        echo $firstname;
//        echo "<script type='text/javascript' alert='$firstname'></script>";
//
        function random_stringen($length) {
            $key = '';
            //$keys = array_merge(range(0, 9), range('a', 'z'));
            $keys = array_merge(range(0, 9));

            for ($i = 0; $i < $length; $i++) {
                $key .= $keys[array_rand($keys)];
            }

            return $key;
        }

        $barcode = random_stringen(12);


        $data = array(
            'patient_first_name' => $this->input->post('txtFirstName'),
            'patient_last_name' => $this->input->post('txtSurname'),
            'patient_gender' => $this->input->post('radGender'),
            'patient_occupation' => $this->input->post('txtOccupation'),
            'patient_allergies' => $this->input->post('txtAreaKnownAllergies'),
            'patient_email' => $this->input->post('txtEmail'),
            'patient_barcode' => $barcode
        );
//        echo $data;
//        
        $regId = $this->patient_registration_model->insert_patient($data);
//        echo $regId;
//        
//        
//        echo '<script language="javascript">';
//        echo 'alert($regId)';
//        echo '</script>';

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
            'mobile_no' => $this->input->post('txtMobileTel'),
            'work_no' => $this->input->post('txtWorkTel')
        );
        $chkDiabetes = 0;
        $chkHighCholesterol = 0;
        $chkHighBloodPressure = 0;
        $chkLowBloodPressure = 0;
        $chkHeartburn = 0;
        $chkAnemia = 0;
        $chkSwollen = 0;
        $chkDepression = 0;
        $chkThyroid = 0;
        $chkShortnessOfBreath = 0;
        $chkTonsillitis = 0;
        $chkAsthma = 0;
        $chkStroke = 0;
        $chkSinusProblems = 0;
        $chkArthritis = 0;
        $chkCancer = 0;
        $chkUlcers = 0;
        $chkGastric = 0;
        $chkHeartDisease = 0;
        $chkKidney = 0;
        $chkLung = 0;
        $chkLiver = 0;
        $chkHeadaches = 0;
        $chkNeurological = 0;
        $chkEyeDisorder = 0;
        $chkEarProblems = 0;
        $chkSeasonalAllergies = 0;

        // Health History
        $chkDifficultyInChewing = 0;
        $chkChewOnOnlyOneSide = 0;
        $chkAvoidBrushingAnyPart = 0;
        $chkGumsBleed = 0;
        $chkGumsFeelSwollen = 0;
        $chkTeethSensitive = 0;
        $chkHurtWhenChew = 0;
        $chkNoticedSlowHealing = 0;
        $chkBlowToTheJaw = 0;
        $chkPainInTheFaceAnd = 0;
        $chkGumChewer = 0;
        $chkPipeSmoker = 0;
        $chkBetelChewer = 0;
        $chkCigarette = 0;
        $chkHotFood = 0;
        $chkSours = 0;
        $chkColdFood = 0;
        $chkSweets = 0;

        // Past Treatments
        $chkRemoval = 0;
        $chkWoundTreatment = 0;
        $chkFillings = 0;
        $chkSealants = 0;
        $chkRetainers = 0;
        $chkBraces = 0;
        $chkCleaning = 0;
        $chkPolishing = 0;
        $chkBridges = 0;
        $chkDentures = 0;
        $chkImplants = 0;

        // Women's Health
        $chkPregnant = 0;
        $chkNursing = 0;

        if ($this->input->post('chkDiabetes') == "Diabetes") {
            $chkDiabetes = 1;
        }
        if ($this->input->post('chkHighCholesterol') == "HighCholesterol") {
            $chkHighCholesterol = 1;
        }
        if ($this->input->post('chkHighBloodPressure') == "HighBloodPressure") {
            $chkHighBloodPressure = 1;
        }
        if ($this->input->post('chkLowBloodPressure') == "LowBloodPressure") {
            $chkLowBloodPressure = 1;
        }
        if ($this->input->post('chkHeartburn') == "Heartburn") {
            $chkHeartburn = 1;
        }
        if ($this->input->post('chkAnemia') == "Anemia") {
            $chkAnemia = 1;
        }
        if ($this->input->post('chkSwollen') == "SwolleAnnkles") {
            $chkSwollen = 1;
        }
        if ($this->input->post('chkShortnessOfBreath') == "ShortnessOfBreath") {
            $chkShortnessOfBreath = 1;
        }
        if ($this->input->post('chkDepression') == "Depression") {
            $chkDepression = 1;
        }
        if ($this->input->post('chkThyroid') == "Thyroid") {
            $chkThyroid = 1;
        }
        if ($this->input->post('chkTonsillitis') == "Tonsillitis") {
            $chkTonsillitis = 1;
        }
        if ($this->input->post('chkAsthma') == "Asthma") {
            $chkAsthma = 1;
        }
        if ($this->input->post('chkStroke') == "Stroke") {
            $chkStroke = 1;
        }
        if ($this->input->post('chkSinusProblems') == "SinusProblems") {
            $chkSinusProblems = 1;
        }
        if ($this->input->post('chkArthritis') == "Arthritis") {
            $chkArthritis = 1;
        }
        if ($this->input->post('chkCancer') == "Cancer") {
            $chkCancer = 1;
        }
        if ($this->input->post('chkUlcers') == "Ulcers") {
            $chkUlcers = 1;
        }
        if ($this->input->post('chkGastric') == "Gastric") {
            $chkGastric = 1;
        }
        if ($this->input->post('chkHeartDisease') == "HeartDisease") {
            $chkHeartDisease = 1;
        }
        if ($this->input->post('chkKidney') == "Kidney") {
            $chkKidney = 1;
        }
        if ($this->input->post('chkLung') == "Lung") {
            $chkLung = 1;
        }
        if ($this->input->post('chkLiver') == "Liver") {
            $chkLiver = 1;
        }
        if ($this->input->post('chkHeadaches') == "Headaches") {
            $chkHeadaches = 1;
        }
        if ($this->input->post('chkNeurological') == "Neurological") {
            $chkNeurological = 1;
        }
        if ($this->input->post('chkEyeDisorder') == "EyeDisorder") {
            $chkEyeDisorder = 1;
        }
        if ($this->input->post('chkEarProblems') == "EarProblems") {
            $chkEarProblems = 1;
        }
        if ($this->input->post('chkSeasonalAllergies') == "SeasonalAllergies") {
            $chkSeasonalAllergies = 1;
        }
        if ($this->input->post('chkDifficultyInChewing') == "Difficulty In Chewing") {
            $chkDifficultyInChewing = 1;
        }
        if ($this->input->post('chkChewOnOnlyOneSide') == "Chew On Only One Side") {
            $chkChewOnOnlyOneSide = 1;
        }
        if ($this->input->post('chkAvoidBrushingAnyPart') == "Avoid Brushing Any Part") {
            $chkAvoidBrushingAnyPart = 1;
        }
        if ($this->input->post('chkGumsBleed') == "Gums Bleed") {
            $chkGumsBleed = 1;
        }
        if ($this->input->post('chkGumsFeelSwollen') == "Gums Feel Swollen") {
            $chkGumsFeelSwollen = 1;
        }
        if ($this->input->post('chkTeethSensitive') == "Teeth Sensitive") {
            $chkTeethSensitive = 1;
        }
        if ($this->input->post('chkHurtWhenChew') == "Hurt When Chew") {
            $chkHurtWhenChew = 1;
        }
        if ($this->input->post('chkNoticedSlowHealing') == "Noticed Slow Healing") {
            $chkNoticedSlowHealing = 1;
        }
        if ($this->input->post('chkBlowToTheJaw') == "Blow To The Jaw") {
            $chkBlowToTheJaw = 1;
        }
        if ($this->input->post('chkPainInTheFaceAnd') == "Pain In The Face And") {
            $chkPainInTheFaceAnd = 1;
        }
        if ($this->input->post('chkGumChewer') == "Gum Chewer") {
            $chkGumChewer = 1;
        }
        if ($this->input->post('chkPipeSmoker') == "Pipe Smoker") {
            $chkPipeSmoker = 1;
        }
        if ($this->input->post('chkBetelChewer') == "Betel Chewer") {
            $chkBetelChewer = 1;
        }
        if ($this->input->post('chkCigarette') == "Cigarette") {
            $chkCigarette = 1;
        }
        if ($this->input->post('chkHotFood') == "Hot Food") {
            $chkHotFood = 1;
        }
        if ($this->input->post('chkSours') == "Sours") {
            $chkSours = 1;
        }
        if ($this->input->post('chkColdFood') == "Cold Food") {
            $chkColdFood = 1;
        }
        if ($this->input->post('chkSweets') == "Sweets") {
            $chkSweets = 1;
        }
        if ($this->input->post('chkRemoval') == "Removal") {
            $chkRemoval = 1;
        }
        if ($this->input->post('chkWoundTreatment') == "Wound Treatment") {
            $chkWoundTreatment = 1;
        }
        if ($this->input->post('chkFillings') == "Fillings") {
            $chkFillings = 1;
        }
        if ($this->input->post('chkSealants') == "Sealants") {
            $chkSealants = 1;
        }
        if ($this->input->post('chkRetainers') == "Retainers") {
            $chkRetainers = 1;
        }
        if ($this->input->post('chkBraces') == "Braces") {
            $chkBraces = 1;
        }
        if ($this->input->post('chkCleaning') == "Cleaning") {
            $chkCleaning = 1;
        }
        if ($this->input->post('chkPolishing') == "Polishing") {
            $chkPolishing = 1;
        }
        if ($this->input->post('chkBridges') == "Bridges") {
            $chkBridges = 1;
        }
        if ($this->input->post('chkDentures') == "Dentures") {
            $chkDentures = 1;
        }
        if ($this->input->post('chkImplants') == "Implants") {
            $chkImplants = 1;
        }
        if ($this->input->post('chkPregnant') == "Pregnant") {
            $chkPregnant = 1;
        }
        if ($this->input->post('Nursing') == "Nursing") {
            $chkNursing = 1;
        }

        $patient_health = array(
            'P_ID' => $regId,
            'main_reason' => $this->input->post('txtAreaReasonForVisit'),
            'other' => $this->input->post('txtAreaOther'),
            'diabetes' => $chkDiabetes,
            'high_cholesterol' => $chkHighCholesterol,
            'high_bood_pressure' => $chkHighBloodPressure,
            'low_bood_pressure' => $chkLowBloodPressure,
            'heartburn' => $chkHeartburn,
            'anemia_bood_problems' => $chkAnemia,
            'swollen_ankies' => $chkSwollen,
            'depression_anxiety' => $chkDepression,
            'tyroid_problems' => $chkThyroid,
            'shortness_of_breath' => $chkShortnessOfBreath,
            'tonsilitis' => $chkTonsillitis,
            'asthma' => $chkAsthma,
            'stroke' => $chkStroke,
            'sinus_problems' => $chkSinusProblems,
            'arthiritis' => $chkArthritis,
            'cancer' => $chkCancer,
            'ulcers__colities' => $chkUlcers,
            'gastric_irritation' => $chkGastric,
            'heart_disease_murmur_angine' => $chkHeartDisease,
            'kidney_bladder_problems' => $chkKidney,
            'lung_problems_cough' => $chkLung,
            'liver_problems_hepatitis' => $chkLiver,
            'headaches_migrains' => $chkHeadaches,
            'neurological_problems' => $chkNeurological,
            'eye_disorder_glaucoma' => $chkEyeDisorder,
            'ear_problems' => $chkEarProblems,
            'seasonal_allergies' => $chkSeasonalAllergies
        );

        $queue = array(
            'P_ID' => $regId,
            'patient_first_name' => $this->input->post('txtFirstName'),
            'patient_gender' => $this->input->post('radGender'),
            'patient_main_reason' => $this->input->post('txtAreaReasonForVisit'),
            'check_status' => '1'
        );

        $datapass = array(
            'barcode' => $barcode
//            'heading' => 'My Heading',
//            'message' => 'My Message'
        );

        $health_history = array(
            'p_id' => $regId,
            'difficulty_in_chewing_your_food' => $chkDifficultyInChewing,
            'chew_on_only_one_side_of_your_mouth' => $chkChewOnOnlyOneSide,
            'avoid_brushing_any_part_of_your_mouth_because_of_pain' => $chkAvoidBrushingAnyPart,
            'gums_bleed_when_you_floss' => $chkGumsBleed,
            'gums_feel_swollen_or_tender' => $chkGumsFeelSwollen,
            'your_teeth_sensitive' => $chkTeethSensitive,
            'hurt_when_you_chew_or_open_wide_to_take_a_bite' => $chkHurtWhenChew,
            'ever_noticed_slow_healing_sores_in_or_about_your_mouth' => $chkNoticedSlowHealing,
            'Have_you_had_a_blow_to_the_jaw' => $chkBlowToTheJaw,
            'have_pain_in_the_f_j_j_t_t' => $chkPainInTheFaceAnd,
            'Gum_chewer' => $chkGumChewer,
            'Pipe_smoker' => $chkPipeSmoker,
            'Betel_chewer' => $chkBetelChewer,
            'Cigarette_smoker' => $chkCigarette,
            'Hot_foods_or_liquids' => $chkHotFood,
            'Sours' => $chkSours,
            'Cold_foods_or_liquids' => $chkColdFood,
            'Sweets' => $chkSweets,
            'health_history_other' => $this->input->post('txtOther')
        );

        $past_treatments = array(
            'Removal' => $chkRemoval,
            'Wound_treatment' => $chkWoundTreatment,
            'Fillings' => $chkFillings,
            'Sealants' => $chkSealants,
            'Retainers' => $chkRetainers,
            'Braces' => $chkBraces,
            'Cleaning' => $chkCleaning,
            'Polishing' => $chkPolishing,
            'Bridges' => $chkBridges,
            'Dentures' => $chkDentures,
            'Implants' => $chkImplants
        );

        $womens_health = array(
            'Are_you_pregnant' => $chkPregnant,
            'Number_of_weeks' => $this->input->post('txtNumberOfWeeks'),
            'Total_number_of_pregnancies' => $this->input->post('txtNumberOfPregnancies'),
            'Number_of_births' => $this->input->post('txtNumberOfBirths'),
            'Nursing' => $chkNursing,
            'if_you_are_still_menstruating' => $this->input->post('txtMenstruating'),
            'Age_at_beginning_of_periods' => $this->input->post('txtBeginningPeriods'),
            'Age_at_end_of_periods' => $this->input->post('txtEndPeriods')
        );

        $success_1 = $this->patient_registration_model->insert_patient_queue($queue);
        $success_2 = $this->patient_registration_model->insert_patient_contacts($patient_contacts);
        $success_3 = $this->patient_registration_model->insert_patient_address($patient_address);
        $success_4 = $this->patient_registration_model->insert_patient_details($patient_health);
        $success_5 = $this->patient_registration_model->insert_health_history($health_history);
        $success_6 = $this->patient_registration_model->insert_past_treatments($past_treatments, $regId); // actually update in 'tbl_patient_dental_history'
        $success_7 = $this->patient_registration_model->insert_womens_health($womens_health, $regId); // actually update in 'tbl_patient_dental_history'
        
//        if ($success_1 && $success_2 && $success_3 && $success_4 && $success_5 && $success_6 && $success_7) {
            $this->load->view('register_success_view', $datapass);
//        }
//        $this->load->view('barcodetest',$datapass);
    }

}

?>