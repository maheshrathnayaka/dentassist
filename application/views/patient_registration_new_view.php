<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title> Smart DentAssist - Patient Registration! </title>

        <!-- CSS  -->
        <link href="<?php echo base_url(); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>/css/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <script type="text/javascript">
            $(document).ready(function () {
            $('ul.tabs').tabs();
            });
            $(document).ready(function () {
            $('ul.tabs').tabs('select_tab', 'tab_id');
            });
            $(document).ready(function () {
            $('select').material_select();
            });
            $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
            });
            $(document).ready(function () {
            $('.dropdown-button').dropdown();
            });

        </script>

    </head>
    <body class="light-blue lighten-4">
        <div class="light-blue lighten-5">
            <nav class="teal darken-1">
                <div class="nav-wrapper">
                    <a href="<?php echo base_url(); ?>" class="waves-effect waves-light brand-logo" style="margin-left: 10px;">Smart
                        DentAssist</a>
                    <a href="#" data-activates="mobile-demo" class="waves-effect waves-light button-collapse">
                        <i class="mdi-navigation-menu"></i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/patient_registration_new"); ?>">Patient Registration</a></li>
                        <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/dental_history_new"); ?>">Dental History</a></li>
                    </ul>
                    <ul class="waves-effect waves-light side-nav" id="mobile-demo">
                        <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/patient_registration_new"); ?>">Patient Registration</a></li>
                        <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/dental_history_new"); ?>">Dental History</a></li>
                    </ul>
                </div>
            </nav>

            <div class="row">
                <form class="col s12" role="form" action="<?php echo base_url(); ?>index.php/patient_registration_new/registerPatient" method="post">
                    <div class="row">                      
                        <div id="test1" class="col s12">
                            <div class="row">
                                <div class="input-field col s4">
                                    <i class="mdi-action-account-circle prefix"></i>
                                    <input id="txtFirstName" name="txtFirstName" type="text" class="validate">
                                    <label for="txtFirstName">First Name</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="mdi-communication-call-made prefix"></i>
                                    <input id="txtPostal" name="txtPostal" type="tel" class="validate">
                                    <label for="txtPostal">Postal No</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="mdi-communication-location-on prefix"></i>
                                    <input id="txtAddress1" name="txtAddress1" type="tel" class="validate">
                                    <label for="txtAddress1">Address 1</label>
                                </div>                                
                            </div>

                            <div class="row">                                
                                <div class="input-field col s4">
                                    <i class="mdi-action-account-circle prefix"></i>
                                    <input id="txtSurname" name="txtSurname" type="tel" class="validate">
                                    <label for="txtSurname">Surname</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="mdi-communication-location-on prefix"></i>
                                    <input id="txtAddress2" name="txtAddress2" type="tel" class="validate">
                                    <label for="txtAddress2">Address 2</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="mdi-communication-location-on prefix"></i>
                                    <input id="txtCity" name="txtCity" type="tel" class="validate">
                                    <label for="txtCity">City</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s4">
                                    <i class="mdi-social-people prefix"></i>
                                    <label>Gender</label>
                                    <br>
                                    <p>
                                        <input class="with-gap" name="radGender" type="radio" id="test5" value="M"/>
                                        <label for="test5">Male</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="radGender" type="radio" id="test6" value="F"/>
                                        <label for="test6">Female</label>
                                    </p>
                                </div>
                                <div class="input-field col s4">
                                    <i class="mdi-communication-call prefix"></i>
                                    <input id="txtHomeTel" name="txtHomeTel" type="text" class="validate">
                                    <label for="txtHomeTel">Home</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="mdi-communication-call prefix"></i>
                                    <input id="txtMobileTel" name="txtMobileTel" type="text" class="validate">
                                    <label for="txtMobileTel">Mobile</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col s4">
                                    <i class="mdi-action-perm-identity prefix"></i>
                                    <input id="txtOccupation" name="txtOccupation" type="text" class="validate">
                                    <label for="txtOccupation">Occupation</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="mdi-communication-call prefix"></i>
                                    <input id="txtWorkTel" name="txtWorkTel" type="text" class="validate">
                                    <label for="txtWorkTel">Work</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="mdi-communication-email prefix"></i>
                                    <input id="txtEmail" name="txtEmail" type="text" class="validate">
                                    <label for="txtEmail">Email</label>
                                </div>                                
                            </div>
                        </div>                       
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="mdi-communication-messenger prefix"></i>
                                <textarea id="txtAreaReasonForVisit" name="txtAreaReasonForVisit" class="materialize-textarea"></textarea>
                                <label for="txtAreaReasonForVisit">Main reason for today’s visit</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="mdi-communication-messenger prefix"></i>
                                <textarea id="txtAreaKnownAllergies" name="txtAreaKnownAllergies" class="materialize-textarea"></textarea>
                                <label for="txtAreaKnownAllergies">Known Allergies</label>
                            </div>                            
                            <!--<div class="input-field col s6">-->
                                <!--<button data-target="modal2" type="button" name="reset" value="reset" class="waves-effect waves-light btn btn-large lime lighten-3 modal-trigger">Patient Details<i class="mdi-content-save left"></i></button>-->
                            <!--<a class="modal-trigger waves-effect waves-light btn" href="#PatientDetailsModel">Modal</a>-->
                            <!--<a class="waves-effect waves-light btn modal-trigger" href="#modal2">Modal With Fixed Footer</a>-->
                            <!--</div>-->
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="mdi-maps-directions-walk prefix"></i>
                                <label>Medical Health History</label>
                                <div class="input-field col s3">
                                    <p>
                                        <input type="checkbox" id="chkDiabetes" name="chkDiabetes" value="Diabetes"/>
                                        <label for="chkDiabetes">Diabetes</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkHighCholesterol" name="chkHighCholesterol" value="HighCholesterol"/>
                                        <label for="chkHighCholesterol">High cholesterol</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkHighBloodPressure" name="chkHighBloodPressure" value="HighBloodPressure"/>
                                        <label for="chkHighBloodPressure">High blood pressure</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkLowBloodPressure" name="chkLowBloodPressure" value="LowBloodPressure"/>
                                        <label for="chkLowBloodPressure">Low blood pressure</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkHeartburn" name="chkHeartburn" value="Heartburn"/>
                                        <label for="chkHeartburn">Heartburn(reflux)</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkAnemia" name="chkAnemia" value="Anemia"/>
                                        <label for="chkAnemia">Anemia/blood problems</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkSwollen" name="chkSwollen" value="SwolleAnnkles"/>
                                        <label for="chkSwollen">Swollen ankles</label>
                                    </p>                                        
                                </div>

                                <div class="input-field col s3">
                                    <p>
                                        <input type="checkbox" id="chkShortnessOfBreath" name="chkShortnessOfBreath" value="ShortnessOfBreath"/>
                                        <label for="chkShortnessOfBreath">Shortness of breath</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkTonsillitis" name="chkTonsillitis" value="Tonsillitis"/>
                                        <label for="chkTonsillitis">Tonsillitis</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkAsthma" name="chkAsthma" value="Asthma"/>
                                        <label for="chkAsthma">Asthma</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkStroke" name="chkStroke" value="Stroke"/>
                                        <label for="chkStroke">Stroke</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkSinusProblems" name="chkSinusProblems" value="SinusProblems"/>
                                        <label for="chkSinusProblems">Sinus problems</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkArthritis" name="chkArthritis" value="Arthritis"/>
                                        <label for="chkArthritis">Arthritis</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkCancer" name="chkCancer" value="Cancer"/>
                                        <label for="chkCancer">Cancer</label>
                                    </p>                                        
                                </div>

                                <div class="input-field col s3">
                                    <p>
                                        <input type="checkbox" id="chkHeartDisease" name="chkHeartDisease" value="HeartDisease"/>
                                        <label for="chkHeartDisease">Heart disease/Murmur/Angina</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkKidney" name="chkKidney" value="Kidney"/>
                                        <label for="chkKidney">Kidney/Bladder problems</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkLung" name="chkLung" value="Lung"/>
                                        <label for="chkLung">Lung problems/cough</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkLiver" name="chkLiver" value="Liver"/>
                                        <label for="chkLiver">Liver problems/Hepatitis</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkHeadaches" name="chkHeadaches" value="Headaches"/>
                                        <label for="chkHeadaches">Headaches/Migraines</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkNeurological" name="chkNeurological" value="Neurological"/>
                                        <label for="chkNeurological">Neurological problems</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkEyeDisorder" name="chkEyeDisorder" value="EyeDisorder"/>
                                        <label for="chkEyeDisorder">Eye disorder/Glaucoma</label>
                                    </p>                                        
                                </div>

                                <div class="input-field col s3">
                                    <p>
                                        <input type="checkbox" id="chkDepression" name="chkDepression" value="Depression"/>
                                        <label for="chkDepression">Depression/Anxiety</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkThyroid" name="chkThyroid" value="Thyroid"/>
                                        <label for="chkThyroid">Thyroid problems</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkUlcers" name="chkUlcers" value="Ulcers"/>
                                        <label for="chkUlcers">Ulcers/colitis</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkGastric" name="chkGastric" value="Gastric"/>
                                        <label for="chkGastric">Gastric irritation</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkEarProblems" name="chkEarProblems" value="EarProblems"/>
                                        <label for="chkEarProblems">Ear problems</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="chkSeasonalAllergies" name="chkSeasonalAllergies" value="SeasonalAllergies"/>
                                        <label for="chkSeasonalAllergies">Seasonal allergies</label>
                                    </p>
                                    <div class="input-field col s12">
                                        <i class="mdi-communication-messenger prefix"></i>
                                        <textarea id="txtAreaOther" name="txtAreaOther" class="materialize-textarea"></textarea>
                                        <label for="txtAreaOther">Other</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                
                    <div class="row right">
                        <button type="reset" name="reset" value="reset" class="waves-effect waves-light btn">Reset<i class="mdi-navigation-refresh left"></i></button>
                        <button type="submit" name="register" value="register"  class="waves-effect waves-light btn">Register<i class="mdi-content-save left"></i></button>
                        <button type="submit" name="cancel" value="cancel" class="waves-effect waves-light btn">Cancel<i class="mdi-navigation-cancel left"></i></button>
                    </div>
                </form>
            </div>

        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2015 Smart DentAssist - Final Year Project
            </div>
        </div>
        <!-- <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            © 2015 Smart DentAssist - Final Year Project
            </div>
          </div>
        </footer> -->
        <!--  Scripts-->
        <!-- <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script> -->
        <script src="<?php echo base_url(); ?>/js/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>/js/materialize.js"></script>
        <script src="<?php echo base_url(); ?>/js/init.js"></script>
        <script src="<?php echo base_url(); ?>/js/perfect-scrollbar.js"></script>
    </body>
</html>
