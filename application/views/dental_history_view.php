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
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3 light-blue lighten-5"><a href="#test1" class="active">Health
                        History</a></li>
                    <li class="tab col s3 light-blue lighten-5"><a href="#test2">Women’s Health</a></li>
                    <li class="tab col s3 light-blue lighten-5"><a href="#test3">Past Treatments</a></li>
                    <li class="tab col s3 light-blue lighten-5"><a href="#test4">Treatments</a></li>
                    <li class="tab col s3 light-blue lighten-5"><a href="#test5">Dental Examination</a></li>
                </ul>
            </div>
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
            <div id="test4" class="col s12">
                <div class="input-field col s4">
                    <i class="mdi-action-event prefix"></i>
                    <label>Treatment Needed</label>
                    <br>

                    <p>
                        <input class="with-gap" name="radTreatment" type="radio" value="urgent" id="chkUrgentTreatment"/>
                        <label for="chkUrgentTreatment">Urgent Treatment</label>
                    </p>

                    <p>
                        <input class="with-gap" name="radTreatment" type="radio" value="restorative" id="chkRestorativeCare"/>
                        <label for="chkRestorativeCare">Restorative Care</label>
                    </p>

                    <p>
                        <input class="with-gap" name="radTreatment" type="radio" value="preventive" id="chkPreventiveCare"/>
                        <label for="chkPreventiveCare">Preventive Care</label>
                    </p>

                    <p>
                        <input class="with-gap" name="radTreatment" type="radio" value="other" id="chkOtherTreatment"/>
                        <label for="chkOtherTreatment">Other</label>
                    </p>
                </div>
                <div class="input-field col s4">
                    <i class="mdi-av-timer prefix"></i>
                    <label>Drugs Prescribed</label>
                    <br>

                    <p>
                        <input type="checkbox" id="chkAntibiotic"/>
                        <label for="chkAntibiotic">Antibiotic</label>
                    </p>

                    <p>
                        <input type="checkbox" id="chkSedative"/>
                        <label for="chkSedative">Sedative</label>
                    </p>

                    <p>
                        <input type="checkbox" id="chkAntiInflammatory"/>
                        <label for="chkAntiInflammatory">Anti-inflammatory</label>
                    </p>

                    <p>
                        <input type="checkbox" id="chkOtherDrug"/>
                        <label for="chkOtherDrug">Other</label>
                    </p>
                </div>
            </div>
            <div id="test5" class="col s12">
                <div class="row">
                    <div class="input-field col s3">
                        <p>
                            <input type="checkbox" id="chkCaries"/>
                            <label for="chkCaries"><b>Caries</b></label>
                        </p>

                        <p>
                            <input type="checkbox" id="chkInitial"/>
                            <label for="chkInitial">Initial</label>
                        </p>

                        <p>
                            <input type="checkbox" id="chkDentine"/>
                            <label for="chkDentine">Dentine</label>
                        </p>

                        <p>
                            <input type="checkbox" id="chkPulpExposed"/>
                            <label for="chkPulpExposed">Pulp exposed</label>
                        </p>
                    </div>
                    <div class="input-field col s3">
                        <p>
                            <input type="checkbox" id="chkPeriodontalDiseases"/>
                            <label for="chkPeriodontalDiseases"><b>Periodontal diseases</b></label>
                        </p>

                        <p>
                            <input type="checkbox" id="chkGingivitis"/>
                            <label for="chkGingivitis">Gingivitis</label>
                        </p>

                        <p>
                            <input type="checkbox" id="chkPeriodontitis"/>
                            <label for="chkPeriodontitis">Periodontitis</label>
                        </p>
                    </div>
                    <div class="input-field col s3">
                        <p>
                            <input type="checkbox" id="chkLesions"/>
                            <label for="chkLesions"><b>Lesions</b></label>
                        </p>

                        <p>
                            <input type="checkbox" id="chkPremalignant"/>
                            <label for="chkPremalignant">Premalignant</label>
                        </p>

                        <p>
                            <input type="checkbox" id="chkCancerous"/>
                            <label for="chkCancerous">Cancerous</label>
                        </p>

                        <p>
                            <input type="checkbox" id="chkNonCancerous"/>
                            <label for="chkNonCancerous">Non Cancerous</label>
                        </p>
                    </div>
                    <div class="input-field col s3">
                        <p>
                            <input type="checkbox" id="chkMalocclusion"/>
                            <label for="chkMalocclusion"><b>Malocclusion</b></label>
                        </p>

                        <p>
                            <input type="checkbox" id="chkClass2Division1"/>
                            <label for="chkClass2Division1">Class 2 Division 1</label>
                        </p>

                        <p>
                            <input type="checkbox" id="chkClass2Division2"/>
                            <label for="chkClass2Division2">Class 2 Division 2</label>
                        </p>

                        <p>
                            <input type="checkbox" id="chkClass3"/>
                            <label for="chkClass3">Class 3</label>
                        </p>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <p>
                                <input type="checkbox" id="chkFluorosis"/>
                                <label for="chkFluorosis"><b>Fluorosis</b></label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkMissingTeeth"/>
                                <label for="chkMissingTeeth"><b>Missing Teeth</b></label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkDryMouth"/>
                                <label for="chkDryMouth"><b>Dry Mouth</b></label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkExtraOral"/>
                                <label for="chkExtraOral"><b>Extra Oral</b></label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkFacialIssues"/>
                                <label for="chkFacialIssues">Facial issues</label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkSwellings"/>
                                <label for="chkSwellings">Swellings</label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkOther"/>
                                <label for="chkOther"><b>Other</b></label>
                            </p>
                        </div>
                        <div class="input-field col s4">
                            <p>
                                <input type="checkbox" id="chkSensitivity"/>
                                <label for="chkSensitivity"><b>Sensitivity</b></label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkToothDecay"/>
                                <label for="chkToothDecay">Tooth decay</label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkFractured"/>
                                <label for="chkFractured">Fractured teeth</label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkWornFillings"/>
                                <label for="chkWornFillings">Worn fillings</label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkGumDisease"/>
                                <label for="chkGumDisease">Gum disease</label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkWornToothEnamel"/>
                                <label for="chkWornToothEnamel">Worn tooth enamel</label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkExposedToothRoot"/>
                                <label for="chkExposedToothRoot">Exposed tooth root</label>
                            </p>
                        </div>
                        <div class="input-field col s4">
                            <p>
                                <input type="checkbox" id="chkOropharyngealCancer"/>
                                <label for="chkOropharyngealCancer"><b>Oropharyngeal Cancer</b></label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkBleedEasily"/>
                                <label for="chkBleedEasily">Sores that bleed easily or do not heal</label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkThickOrHard"/>
                                <label for="chkThickOrHard">Thick or hard spot or lump</label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkRoughened"/>
                                <label for="chkRoughened">Roughened or crusted area</label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkNumbness"/>
                                <label for="chkNumbness">Numbness, pain or tenderness</label>
                            </p>
                            <p>
                                <input type="checkbox" id="chkChangeTheWay"/>
                                <label for="chkChangeTheWay">Change in the way your teeth fit together when you bite down</label>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <i class="mdi-communication-messenger prefix"></i>
                            <textarea id="txtAreaComments" class="materialize-textarea"></textarea>
                            <label for="txtAreaComments">Comments</label>
                        </div>
                    </div>
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
