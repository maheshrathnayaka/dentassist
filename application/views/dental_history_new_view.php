<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title> Smart DentAssist - Dental History! </title>

    <!-- CSS  -->
    <link href="<?php echo base_url();?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo base_url();?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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
    </script>

</head>
<body class="light-blue lighten-4">
<div class="light-blue lighten-5">
    <nav class="teal darken-1">
        <div class="nav-wrapper">
            <a href="<?php echo base_url();?>" class="waves-effect waves-light brand-logo" style="margin-left: 10px;">Smart
                DentAssist</a>
            <a href="#" data-activates="mobile-demo" class="waves-effect waves-light button-collapse">
                <i class="mdi-navigation-menu"></i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/patient_registration");?>">Patient Registration</a></li>
                <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/dental_history");?>">Dental History</a></li>
            </ul>
            <ul class="waves-effect waves-light side-nav" id="mobile-demo">
                <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/patient_registration");?>">Patient Registration</a></li>
                <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/dental_history");?>">Dental History</a></li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="row">
            
            <div id="test1" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="mdi-social-mood prefix"></i>
                        <label>Dental Health History</label>
                        <br>

                        <div class="input-field col s6">
                            <p>
                                <input type="checkbox" id="chkDiabetes"/>
                                <label for="chkDiabetes">Do you have difficulty in chewing your food?</label>
                            </p>

                            <p>
                                <input type="checkbox" id="chkHighCholesterol"/>
                                <label for="chkHighCholesterol">Do you chew on only one side of your mouth?</label>
                            </p>

                            <p>
                                <input type="checkbox" id="chkHighBloodPressure"/>
                                <label for="chkHighBloodPressure">Do you avoid brushing any part of your mouth because
                                    of pain?</label>
                            </p>

                            <p>
                                <input type="checkbox" id="chkLowBloodPressure"/>
                                <label for="chkLowBloodPressure">Do your gums bleed when you floss?</label>
                            </p>

                            <p>
                                <input type="checkbox" id="chkHeartburn"/>
                                <label for="chkHeartburn">Do your gums feel swollen or tender?</label>
                            </p>
                        </div>

                        <div class="input-field col s6">
                            <p>
                                <input type="checkbox" id="chkSwollen"/>
                                <label for="chkSwollen">Are your teeth sensitive?</label>
                            </p>

                            <p>
                                <input type="checkbox" id="chkDepression"/>
                                <label for="chkDepression">Does it hurt when you chew or open wide to take a
                                    bite?</label>
                            </p>

                            <p>
                                <input type="checkbox" id="chkAnemia"/>
                                <label for="chkAnemia">Have you ever noticed slow-healing sores in or about your
                                    mouth?</label>
                            </p>

                            <p>
                                <input type="checkbox" id="chkTrauma"/>
                                <label for="chkTrauma">Have you had a blow to the jaw (trauma)?</label>
                            </p>

                            <p>
                                <input type="checkbox" id="chkThyroid"/>
                                <label for="chkThyroid">Do you have pain in the face, cheeks, jaws, joints, throat, or
                                    temples?</label>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <p>
                            <label>Are you a habitual</label>

                        <div class="input-field col s6">
                            <input type="checkbox" id="chkGumChewer"/>
                            <label for="chkGumChewer">Gum chewer?</label>
                            <input type="checkbox" id="chkPipeSmoker"/>
                            <label for="chkPipeSmoker">Pipe smoker?</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="checkbox" id="chkBetelChewer"/>
                            <label for="chkBetelChewer">Betel chewer?</label>
                            <input type="checkbox" id="chkCigarette"/>
                            <label for="chkCigarette">Cigarette smoker?</label>
                        </div>
                        </p>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <div class="input-field col s6">
                        <p>
                            <label>Do you feel twinges of pain when your teeth come in contact with</label>

                        <div class="input-field col s6">
                            <input type="checkbox" id="chkHotFood"/>
                            <label for="chkHotFood">Hot foods or liquids?</label>
                            <input type="checkbox" id="chkSours"/>
                            <label for="chkSours">Sours?</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="checkbox" id="chkColdFood"/>
                            <label for="chkColdFood">Cold foods or liquids?</label>
                            <input type="checkbox" id="chkSweets"/>
                            <label for="chkSweets">Sweets?</label>
                        </div>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-communication-messenger prefix"></i>
                        <textarea id="txtOther" class="materialize-textarea"></textarea>
                        <label for="txtOther">Other</label>
                    </div>
                </div>
            </div>

            <div id="test2" class="col s12">
                <i class="mdi-social-mood prefix"></i>
                        <label>Women's Health</label>
                        <br>
                <div class="input-field col s6">
                    <p>
                        <input type="checkbox" id="chkPregnant"/>
                        <label for="chkPregnant">Are you pregnant?</label>
                    </p>
                </div>
                <div class="input-field col s6">
                    <p>
                        <input type="checkbox" id="chkNursing"/>
                        <label for="chkNursing">Nursing?</label>
                    </p>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-communication-dialpad prefix"></i>
                        <input id="txtNumberOfWeeks" type="text" class="validate">
                        <label for="txtNumberOfWeeks">Number of weeks</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="mdi-social-domain prefix"></i>
                        <input id="txtMenstruating" type="tel" class="validate">
                        <label for="txtMenstruating">Date of last menstrual period if you are still menstruating</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-communication-dialpad prefix"></i>
                        <input id="txtNumberOfPregnancies" type="text" class="validate">
                        <label for="txtNumberOfPregnancies">Total number of pregnancies</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="mdi-social-domain prefix"></i>
                        <input id="txtBeginningPeriods" type="tel" class="validate">
                        <label for="txtBeginningPeriods">Age at beginning of periods (menstruation)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-communication-dialpad prefix"></i>
                        <input id="txtNumberOfBirths" type="text" class="validate">
                        <label for="txtNumberOfBirths">Number of births</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="mdi-social-domain prefix"></i>
                        <input id="txtEndPeriods" type="tel" class="validate">
                        <label for="txtEndPeriods">Age at end of periods (menopause)</label>
                    </div>
                </div>

            </div>

            <div id="test3" class="col s12">
                <i class="mdi-social-mood prefix"></i>
                        <label>Past Treatments</label>
                        <br>
                <div class="input-field col s3">
                    <p>
                        <input type="checkbox" id="chkRemoval"/>
                        <label for="chkRemoval">Removal</label>
                    </p>

                    <p>
                        <input type="checkbox" id="chkWoundTreatment"/>
                        <label for="chkWoundTreatment">Wound treatment</label>
                    </p>
                </div>
                <div class="input-field col s3">
                    <p>
                        <input type="checkbox" id="chkFillings"/>
                        <label for="chkFillings">Fillings</label>
                    </p>

                    <p>
                        <input type="checkbox" id="chkSealants"/>
                        <label for="chkSealants">Sealants</label>
                    </p>

                    <p>
                        <input type="checkbox" id="chkRetainers"/>
                        <label for="chkRetainers">Retainers</label>
                    </p>

                    <p>
                        <input type="checkbox" id="chkBraces"/>
                        <label for="chkBraces">Braces</label>
                    </p>
                </div>
                <div class="input-field col s3">
                    <p>
                        <input type="checkbox" id="chkCleaning"/>
                        <label for="chkCleaning">Cleaning</label>
                    </p>

                    <p>
                        <input type="checkbox" id="chkPolishing"/>
                        <label for="chkPolishing">Polishing</label>
                    </p>

                    <p>
                        <input type="checkbox" id="chkBridges"/>
                        <label for="chkBridges">Bridges</label>
                    </p>

                    <p>
                        <input type="checkbox" id="chkDentures"/>
                        <label for="chkDentures">Dentures</label>
                    </p>

                    <p>
                        <input type="checkbox" id="chkImplants"/>
                        <label for="chkImplants">Implants</label>
                    </p>
                    
                </div>                
            </div>                        
        </div>
        <form class="col s12">
            <div class="row right">
                <a class="waves-effect waves-light btn"><i class="mdi-navigation-refresh left"></i>Reset</a>
                <a class="waves-effect waves-light btn"><i class="mdi-content-save left"></i>Save</a>
                <a class="waves-effect waves-light btn"><i class="mdi-navigation-cancel left"></i>Cancel</a>
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
<script src="<?php echo base_url();?>/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url();?>/js/materialize.js"></script>
<script src="<?php echo base_url();?>/js/init.js"></script>

</body>
</html>
