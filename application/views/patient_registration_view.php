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
                        <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/patient_registration"); ?>">Patient Registration</a></li>
                        <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/dental_history"); ?>">Dental History</a></li>
                    </ul>
                    <ul class="waves-effect waves-light side-nav" id="mobile-demo">
                        <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/patient_registration"); ?>">Patient Registration</a></li>
                        <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/dental_history"); ?>">Dental History</a></li>
                    </ul>
                </div>
            </nav>

            <div class="row">
                <form class="col s12" role="form" action="<?php echo base_url(); ?>index.php/patient_registration/register_patient" method="post">
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab col s3 light-blue lighten-5"><a href="#test1" class="active">Personal Information</a>
                                </li>
                                <li class="tab col s3 light-blue lighten-5"><a href="#test2">Contact Information</a></li>
                                <li class="tab col s3 light-blue lighten-5"><a href="#test3">Patient Details</a></li>
                            </ul>
                        </div>
                        <div id="test1" class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="mdi-action-account-circle prefix"></i>
                                    <input id="txtFirstName" name="txtFirstName" type="text" class="validate">
                                    <label for="txtFirstName">First Name</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="mdi-action-account-circle prefix"></i>
                                    <input id="txtSurname" name="txtSurname" type="tel" class="validate">
                                    <label for="txtSurname">Surname</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
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
                                <div class="input-field col s6">
                                    <i class="mdi-action-perm-identity prefix"></i>
                                    <input id="txtOccupation" name="txtOccupation" type="text" class="validate">
                                    <label for="txtOccupation">Occupation</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="mdi-communication-messenger prefix"></i>
                                    <textarea id="txtAreaKnownAllergies" name="txtAreaKnownAllergies" class="materialize-textarea"></textarea>
                                    <label for="txtAreaKnownAllergies">Known Allergies</label>
                                </div>
                            </div>
                            <div class="row">
                                <!--<label>Materialize Select</label>-->
                                <!--<div class="select-wrapper">-->
                                <!--<input type="text" class="select-dropdown" readonly="true"-->
                                <!--data-activates="select-options-64d5d5bf-2dcf-83c0-291a-e96b9948cd27"-->
                                <!--value="Choose your option">-->
                                <!--<i class="mdi-navigation-arrow-drop-down active"></i>-->
                                <!--<select class="initialized">-->
                                <!--<option value="" disabled="" selected="">Choose your option</option>-->
                                <!--<option value="1">Option 1</option>-->
                                <!--<option value="2">Option 2</option>-->
                                <!--<option value="3">Option 3</option>-->
                                <!--</select>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <div id="test2" class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="mdi-communication-call prefix"></i>
                                    <input id="txtHomeTel" name="txtHomeTel" type="text" class="validate">
                                    <label for="txtHomeTel">Home</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="mdi-communication-call-made prefix"></i>
                                    <input id="txtPostal" name="txtPostal" type="tel" class="validate">
                                    <label for="txtPostal">Postal No</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="mdi-communication-call prefix"></i>
                                    <input id="txtMobileTel" name="txtMobileTel" type="text" class="validate">
                                    <label for="txtMobileTel">Mobile</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="mdi-communication-location-on prefix"></i>
                                    <input id="txtAddress1" name="txtAddress1" type="tel" class="validate">
                                    <label for="txtAddress1">Address 1</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="mdi-communication-call prefix"></i>
                                    <input id="txtWorkTel" name="txtWorkTel" type="text" class="validate">
                                    <label for="txtWorkTel">Work</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="mdi-communication-location-on prefix"></i>
                                    <input id="txtAddress2" name="txtAddress2" type="tel" class="validate">
                                    <label for="txtAddress2">Address 2</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="mdi-communication-email prefix"></i>
                                    <input id="txtEmail" name="txtEmail" type="text" class="validate">
                                    <label for="txtEmail">Email</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="mdi-communication-location-on prefix"></i>
                                    <input id="txtCity" name="txtCity" type="tel" class="validate">
                                    <label for="txtCity">City</label>
                                </div>
                            </div>
                        </div>
                        <div id="test3" class="col s12">
                            <div class="row">
                                <div class="input-field col s8">
                                    <i class="mdi-communication-messenger prefix"></i>
                                    <textarea id="txtAreaReasonForVisit" name="txtAreaReasonForVisit" class="materialize-textarea"></textarea>
                                    <label for="txtAreaReasonForVisit">Main reason for today’s visit</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="mdi-maps-directions-walk prefix"></i>
                                    <label>Medical Health History</label>
                                    <div class="input-field col s4">
                                        <p>
                                            <input type="checkbox" id="chkDiabetes" name="chkDiabetes"/>
                                            <label for="chkDiabetes">Diabetes</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkHighCholesterol" name="chkHighCholesterol"/>
                                            <label for="chkHighCholesterol">High cholesterol</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkHighBloodPressure" name="chkHighBloodPressure"/>
                                            <label for="chkHighBloodPressure">High blood pressure</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkLowBloodPressure" name="chkLowBloodPressure"/>
                                            <label for="chkLowBloodPressure">Low blood pressure</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkHeartburn" name="chkHeartburn"/>
                                            <label for="chkHeartburn">Heartburn(reflux)</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkAnemia" name="chkAnemia"/>
                                            <label for="chkAnemia">Anemia/blood problems</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkSwollen" name="chkSwollen"/>
                                            <label for="chkSwollen">Swollen ankles</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkDepression" name="chkDepression"/>
                                            <label for="chkDepression">Depression/Anxiety</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkThyroid" name="chkThyroid"/>
                                            <label for="chkThyroid">Thyroid problems</label>
                                        </p>
                                    </div>

                                    <div class="input-field col s4">
                                        <p>
                                            <input type="checkbox" id="chkShortnessOfBreath" name="chkShortnessOfBreath"/>
                                            <label for="chkShortnessOfBreath">Shortness of breath</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkTonsillitis" name="chkTonsillitis"/>
                                            <label for="chkTonsillitis">Tonsillitis</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkAsthma" name="chkAsthma"/>
                                            <label for="chkAsthma">Asthma</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkStroke" name="chkStroke"/>
                                            <label for="chkStroke">Stroke</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkSinusProblems" name="chkSinusProblems"/>
                                            <label for="chkSinusProblems">Sinus problems</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkArthritis" name="chkArthritis"/>
                                            <label for="chkArthritis">Arthritis</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkCancer" name="chkCancer"/>
                                            <label for="chkCancer">Cancer</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkUlcers" name="chkUlcers"/>
                                            <label for="chkUlcers">Ulcers/colitis</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkGastric" name="chkGastric"/>
                                            <label for="chkGastric">Gastric irritation</label>
                                        </p>
                                    </div>

                                    <div class="input-field col s4">
                                        <p>
                                            <input type="checkbox" id="chkHeartDisease" name="chkHeartDisease"/>
                                            <label for="chkHeartDisease">Heart disease/Murmur/Angina</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkKidney" name="chkKidney"/>
                                            <label for="chkKidney">Kidney/Bladder problems</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkLung" name="chkLung"/>
                                            <label for="chkLung">Lung problems/cough</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkLiver" name="chkLiver"/>
                                            <label for="chkLiver">Liver problems/Hepatitis</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkHeadaches" name="chkHeadaches"/>
                                            <label for="chkHeadaches">Headaches/Migraines</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkNeurological" name="chkNeurological"/>
                                            <label for="chkNeurological">Neurological problems</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkEyeDisorder" name="chkEyeDisorder"/>
                                            <label for="chkEyeDisorder">Eye disorder/Glaucoma</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkEarProblems" name="chkEarProblems"/>
                                            <label for="chkEarProblems">Ear problems</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="chkSeasonalAllergies" name="chkSeasonalAllergies"/>
                                            <label for="chkSeasonalAllergies">Seasonal allergies</label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s8">
                                    <i class="mdi-communication-messenger prefix"></i>
                                    <textarea id="txtAreaOther" name="txtAreaOther" class="materialize-textarea"></textarea>
                                    <label for="txtAreaOther">Other</label>
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
