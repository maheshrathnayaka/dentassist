<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Smart DentAssist - Profile! </title>

        <!-- CSS  -->
        <link href="<?php echo base_url(); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>/css/perfect-scrollbar.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <!--    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->
        <!--    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->
        <!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
        <script type="javascript">
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
        <script type="text/javascript">

            function loadPatienDetails(pid) {

                var $pid = pid;
                //    alert($ward);
                $.ajax({
                    url: "http://hisproject2014.netau.net/index.php/schedule/loadSchedulenew/" + $ward,
                    type: 'POST',
                    //data:{'ID':id},
                    dataType: "HTML",
                    success: function(data) {

                        if (data) {
                            $('#panel_tableLoad').html(data);

                        }
                    }

                });
            }

        </script>
        <style type="text/css">
            .customClass{
                margin: 1px;
                padding: 1px;
                background-color: #03999a;
            }
            #myrow1, #myrow2, #myrow3{
                margin: 1px;
                /*padding: 0px;*/
            }
            .card.large {
                /*height: 100px;*/
            }

            #container {
                position: relative;
                height: 100%; /* Or whatever you want (eg. 400px) */
            }

            /*.titleText{*/
            /*font-size: 10px;*/
            /*}*/
        </style>
    </head>
    <body class="light-blue lighten-5">

        <div class="light-blue lighten-5">

            <!-- Dropdown Items  -->
            <!--<ul id="dropdown1" class="dropdown-content">-->
            <!--<li><a href="#!">pathum</a></li>-->
            <!--<li class="divider"></li>-->
            <!--<li><a href="#!">mahesh</a></li>-->
            <!--<li class="divider"></li>-->
            <!--<li><a href="#!">suraj</a></li>-->
            <!--</ul>-->
            <nav class="teal darken-1">
                <div class="nav-wrapper">
                    <a href="index.html" class="waves-effect waves-light brand-logo" style="margin-left: 10px;">Smart
                        DentAssist</a>
                    <a href="#" data-activates="mobile-demo" class="waves-effect waves-light button-collapse">
                        <i class="mdi-navigation-menu"></i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="waves-effect waves-light" href="patient_registration">Patient Registration</a></li>
                        <li><a class="waves-effect waves-light" href="dental_history">Dental History</a></li>
                        <!--<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Direct FN<i class="mdi-navigation-arrow-drop-down right"></i></a></li>-->

                    </ul>
                    <ul class="waves-effect waves-light side-nav" id="mobile-demo">
                        <li><a class="waves-effect waves-light" href="patient_registration">Patient Registration</a></li>
                        <li><a class="waves-effect waves-light" href="dental_history">Dental History</a></li>
                        <!--<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="mdi-navigation-arrow-drop-down right"></i></a></li>-->

                    </ul>
                </div>
            </nav>

            <!-- DATE PICKER -->
            <!--<input type="date" class="datepicker" value="Pick any date you want">-->
            <div>
            <!--<table class="responsive-table">
                &lt;!&ndash;<thead>
                    <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">Item Name</th>
                        <th data-field="price">Item Price</th>
                    </tr>
                    </thead>&ndash;&gt;
                    <tbody>
                    <tr>
                        <td class="m4">
                            <div class="row" id="myrow1">
                                <div class="col m3">
                                    <div class="card blue-grey darken-1 large">
                                        <div class="card-content white-text">
                                            <span class=""><b>1. Hasith Malinga : M : 26Y</b></span>
                                            <p>Dath galawanna</p>
                                        </div>
                                        &lt;!&ndash;<div class="card-action">
                                            <a href="#">This is a link</a>
                                            <a href='#'>This is a link</a>
                                        </div>&ndash;&gt;
                                    </div>
                                </div>
                            </div>
                            &lt;!&ndash;<div class="">
                                <div class="col m8">
                                    <div class="card blue-grey darken-1">
                                        <div class="card-content white-text">
                                            <span class=""><b>1. Hasith Malinga : M : 26Y</b></span>
                                            <p>Dath galawanna</p>
                                        </div>
                                        &lt;!&ndash;<div class="card-action">
                                <a href="#">This is a link</a>
                                <a href='#'>This is a link</a>
                            </div>&ndash;&gt;
                        </div>
                    </div>
                </div>&ndash;&gt;
                            <div class="row" id="myrow2">
                                <div class="col m3">
                                    <div class="card blue-grey darken-1 large">
                                        <div class="card-content white-text">
                                            <span class=""><b>2. Mahesh Rathnayaka : M : 25Y</b></span>
                                            <p>Dath galawanna</p>
                                        </div>
                                        &lt;!&ndash;<div class="card-action">
                                            <a href="#">This is a link</a>
                                            <a href='#'>This is a link</a>
                                        </div>&ndash;&gt;
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="myrow3">
                                <div class="col m3">
                                    <div class="card blue-grey darken-1 large">
                                        <div class="card-content white-text">
                                            <span class=""><b>3. Daminda Kumara : M : 25Y</b></span>
                                            <p>Dath Purawanna</p>
                                        </div>
                                        &lt;!&ndash;<div class="card-action">
                                            <a href="#">This is a link</a>
                                            <a href='#'>This is a link</a>
                                        </div>&ndash;&gt;
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="myrow4">
                                <div class="col m3">
                                    <div class="card blue-grey darken-1 large">
                                        <div class="card-content white-text">
                                            <span class=""><b>3. Kavindi Bogahawatte : F : 23Y</b></span>
                                            <p>Dath Galawanna</p>
                                        </div>
                                        &lt;!&ndash;<div class="card-action">
                                            <a href="#">This is a link</a>
                                            <a href='#'>This is a link</a>
                                        </div>&ndash;&gt;
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="m8">
                            <div class="row">
                                <div class="col m9">
                                    <div class="card blue-grey darken-1">
                                        <div class="card-content white-text">
                                            <span class=""><b>3. Kavindi Bogahawatte : F : 23Y</b></span>
                                            <p>Dath Galawanna</p>
                                        </div>
                                        &lt;!&ndash;<div class="card-action">
                                            <a href="#">This is a link</a>
                                            <a href='#'>This is a link</a>
                                        </div>&ndash;&gt;
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>-->


                <div class="row">
                    <div class="col s3 grid-example" id="Demo">
                        <?php
                        if (isset($query)) {
                            foreach ($query as $row) {
                                ?>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="card blue-grey darken-1">
                                            <div class="card-content white-text">
                                                <span class=""><b><?php echo $row->P_ID ?></b></span>
                                                <p><?php echo $row->patient_first_name ?></p>
                                                <p><?php echo $row->patient_main_reason ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                            <?php
                        } else {
                            echo $query;
                            echo 'data not set';
                        }
                        ?>



                    </div>

                    <div class="col s9 grid-example">
                        <div class="row">
                            <div class="col s12">
                                <div class="card  light-green darken-4">
                                    <div class="card-content white-text">
                                        <span class=""><h5><b>Hasith Malinga : M : 26 Years old : 1</b></h5></span>

                                        <p>Visit for : <span class="customClass"><b>Tooth Removal</b></span></p>
                                        <p>Allergies : </p>
                                        
                                        <!-- Edit personal info - Modal Trigger -->
                                        <a class="modal-trigger waves-effect waves-light btn-flat right" href="#modal1">Edit personal information</a>

                                        <!-- Modal Structure -->
                                        <div id="modal1" class="modal modal-fixed-footer">
                                            <div class="modal-content">

                                                <div class="row">

                                                    <div class="row">                      
                                                        <div class="col s12 m6 l4">
                                                            <div class="input-field">
                                                                <i class="mdi-action-account-circle prefix"></i>
                                                                <input id="txtFirstName" name="txtFirstName" type="text" class="validate" required>
                                                                <label for="txtFirstName">First Name</label>
                                                            </div>
                                                            <div class="input-field">
                                                                <i class="mdi-action-account-circle prefix"></i>
                                                                <input id="txtSurname" name="txtSurname" type="tel" class="validate" required>
                                                                <label for="txtSurname">Surname</label>
                                                            </div>
                                                            <div class="input-field">
                                                                <i class="mdi-social-people prefix"></i>
                                                                <label>Gender</label>
                                                                <br>
                                                                <p>
                                                                    <input class="with-gap" name="radGender" type="radio" id="radioMale" value="M"/ >
                                                                           <label for="radioMale">Male</label>
                                                                    <input class="with-gap" name="radGender" type="radio" id="radioFemale" value="F"/>
                                                                    <label for="radioFemale">Female</label>
                                                                </p>
                                                            </div>
                                                            <div class="input-field">
                                                                <i class="mdi-action-perm-identity prefix"></i>
                                                                <input id="txtOccupation" name="txtOccupation" type="text" class="validate" required>
                                                                <label for="txtOccupation">Occupation</label>
                                                            </div>
                                                            <div class="input-field">
                                                                <i class="mdi-action-perm-identity prefix"></i>
                                                                <input id="txtDOB" type="date" class="datepicker" required>                                
                                                                <label for="txtDOB">Date of Birth</label>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l4">
                                                            <div class="input-field">
                                                                <i class="mdi-communication-call-made prefix"></i>
                                                                <input id="txtPostal" name="txtPostal" type="tel" class="validate">
                                                                <label for="txtPostal">Postal No</label>
                                                            </div>
                                                            <div class="input-field">
                                                                <i class="mdi-communication-location-on prefix"></i>
                                                                <input id="txtAddress1" name="txtAddress1" type="tel" class="validate">
                                                                <label for="txtAddress1">Address 1</label>
                                                            </div>
                                                            <div class="input-field">
                                                                <i class="mdi-communication-location-on prefix"></i>
                                                                <input id="txtAddress2" name="txtAddress2" type="tel" class="validate">
                                                                <label for="txtAddress2">Address 2</label>
                                                            </div>
                                                            <div class="input-field">
                                                                <i class="mdi-communication-location-on prefix"></i>
                                                                <input id="txtCity" name="txtCity" type="tel" class="validate" required>
                                                                <label for="txtCity">City</label>
                                                            </div>
                                                            <div class="input-field">
                                                                <i class="mdi-communication-messenger prefix"></i>
                                                                <textarea id="txtAreaReasonForVisit" name="txtAreaReasonForVisit" class="materialize-textarea" required></textarea>
                                                                <label for="txtAreaReasonForVisit">Main reason for today’s visit</label>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l4">
                                                            <div class="input-field">
                                                                <i class="mdi-communication-call prefix"></i>
                                                                <input id="txtHomeTel" name="txtHomeTel" type="text" class="validate">
                                                                <label for="txtHomeTel">Home</label>
                                                            </div>
                                                            <div class="input-field">
                                                                <i class="mdi-communication-call prefix"></i>
                                                                <input id="txtMobileTel" name="txtMobileTel" type="text" class="validate">
                                                                <label for="txtMobileTel">Mobile</label>
                                                            </div>
                                                            <div class="input-field">
                                                                <i class="mdi-communication-call prefix"></i>
                                                                <input id="txtWorkTel" name="txtWorkTel" type="text" class="validate">
                                                                <label for="txtWorkTel">Work</label>
                                                            </div>
                                                            <div class="input-field">
                                                                <i class="mdi-communication-email prefix"></i>
                                                                <input id="txtEmail" name="txtEmail" type="text" class="validate">
                                                                <label for="txtEmail">Email</label>
                                                            </div>
                                                            <div class="input-field">
                                                                <i class="mdi-communication-messenger prefix"></i>
                                                                <textarea id="txtAreaKnownAllergies" name="txtAreaKnownAllergies" class="materialize-textarea"></textarea>
                                                                <label for="txtAreaKnownAllergies">Known Allergies</label>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Save</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>

                                        <p>Health History : <span class="customClass"><b>Diabetics</b></span> : <span class="customClass"><b>Stroke</b></span></p>
                                        
                                        <!-- Edit health info - Modal Trigger -->
                                        <a class="modal-trigger waves-effect waves-light btn-flat right" href="#modal2">Edit health history</a>

                                        <!-- Modal Structure -->
                                        <div id="modal2" class="modal modal-fixed-footer">
                                            <div class="modal-content">

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-maps-directions-walk prefix"></i>
                                                        <label><b>Medical Health History</b></label> <br><br>
                                                        <div class="input-field col s3">
                                                            <p>
                                                                <input type="checkbox" id="chkDiabetes" name="chkDiabetes" value="Diabetes"/>
                                                                <label for="chkDiabetes">Diabetes</label> 
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkHighCholesterol" name="chkHighCholesterol" value="HighCholesterol"/>
                                                                <label for="chkHighCholesterol">High cholesterol</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkHighBloodPressure" name="chkHighBloodPressure" value="HighBloodPressure"/>
                                                                <label for="chkHighBloodPressure">High blood pressure</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkLowBloodPressure" name="chkLowBloodPressure" value="LowBloodPressure"/>
                                                                <label for="chkLowBloodPressure">Low blood pressure</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkHeartburn" name="chkHeartburn" value="Heartburn"/>
                                                                <label for="chkHeartburn">Heartburn(reflux)</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkAnemia" name="chkAnemia" value="Anemia"/>
                                                                <label for="chkAnemia">Anemia / blood problems</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkSwollen" name="chkSwollen" value="SwolleAnnkles"/>
                                                                <label for="chkSwollen">Swollen ankles</label>
                                                            </p><br>                                        
                                                        </div>
                                                        <div class="input-field col s3">
                                                            <p>
                                                                <input type="checkbox" id="chkShortnessOfBreath" name="chkShortnessOfBreath" value="ShortnessOfBreath"/>
                                                                <label for="chkShortnessOfBreath">Shortness of breath</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkTonsillitis" name="chkTonsillitis" value="Tonsillitis"/>
                                                                <label for="chkTonsillitis">Tonsillitis</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkAsthma" name="chkAsthma" value="Asthma"/>
                                                                <label for="chkAsthma">Asthma</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkStroke" name="chkStroke" value="Stroke"/>
                                                                <label for="chkStroke">Stroke</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkSinusProblems" name="chkSinusProblems" value="SinusProblems"/>
                                                                <label for="chkSinusProblems">Sinus problems</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkArthritis" name="chkArthritis" value="Arthritis"/>
                                                                <label for="chkArthritis">Arthritis</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkCancer" name="chkCancer" value="Cancer"/>
                                                                <label for="chkCancer">Cancer</label>
                                                            </p><br>                                        
                                                        </div>
                                                        <div class="input-field col s3">
                                                            <p>
                                                                <input type="checkbox" id="chkHeartDisease" name="chkHeartDisease" value="HeartDisease"/>
                                                                <label for="chkHeartDisease">Heart disease / Murmur / Angina</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkKidney" name="chkKidney" value="Kidney"/>
                                                                <label for="chkKidney">Kidney / Bladder problems</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkLung" name="chkLung" value="Lung"/>
                                                                <label for="chkLung">Lung problems / cough</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkLiver" name="chkLiver" value="Liver"/>
                                                                <label for="chkLiver">Liver problems / Hepatitis</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkHeadaches" name="chkHeadaches" value="Headaches"/>
                                                                <label for="chkHeadaches">Headaches / Migraines</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkNeurological" name="chkNeurological" value="Neurological"/>
                                                                <label for="chkNeurological">Neurological problems</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkEyeDisorder" name="chkEyeDisorder" value="EyeDisorder"/>
                                                                <label for="chkEyeDisorder">Eye disorder / Glaucoma</label>
                                                            </p><br>                                        
                                                        </div>
                                                        <div class="input-field col s3">
                                                            <p>
                                                                <input type="checkbox" id="chkDepression" name="chkDepression" value="Depression"/>
                                                                <label for="chkDepression">Depression / Anxiety</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkThyroid" name="chkThyroid" value="Thyroid"/>
                                                                <label for="chkThyroid">Thyroid problems</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkUlcers" name="chkUlcers" value="Ulcers"/>
                                                                <label for="chkUlcers">Ulcers / colitis</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkGastric" name="chkGastric" value="Gastric"/>
                                                                <label for="chkGastric">Gastric irritation</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkEarProblems" name="chkEarProblems" value="EarProblems"/>
                                                                <label for="chkEarProblems">Ear problems</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkSeasonalAllergies" name="chkSeasonalAllergies" value="SeasonalAllergies"/>
                                                                <label for="chkSeasonalAllergies">Seasonal allergies</label>
                                                            </p><br>
                                                            <div class="input-field col s12">
                                                                <i class="mdi-communication-messenger prefix"></i>
                                                                <textarea id="txtAreaOther" name="txtAreaOther" class="materialize-textarea"></textarea>
                                                                <label for="txtAreaOther">Other</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Save</a>
                                            </div>
                                        </div>
                                        <br><br>

                                        <p>Dental History : <span class="customClass"><b>Gums feel swollen or tender</b></span></p>

                                        <!-- Edit dental health info - Modal Trigger -->
                                        <a class="modal-trigger waves-effect waves-light btn-flat right" href="#modal3">Edit dental history</a>

                                        <!-- Modal Structure -->
                                        <div id="modal3" class="modal modal-fixed-footer">
                                            <div class="modal-content">

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-social-mood prefix"></i>
                                                        <label><b>Dental Health History</b></label>
                                                        <br><br>
                                                        <div class="input-field col s6">
                                                            <p>
                                                                <input type="checkbox" id="chkDifficultyInChewing" name="chkDifficultyInChewing" value="Difficulty In Chewing"/>
                                                                <label for="chkDifficultyInChewing">Do you have difficulty in chewing your food?</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkChewOnOnlyOneSide" name="chkChewOnOnlyOneSide" value="Chew On Only One Side"/>
                                                                <label for="chkChewOnOnlyOneSide">Do you chew on only one side of your mouth?</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkAvoidBrushingAnyPart" name="chkAvoidBrushingAnyPart" value="Avoid Brushing Any Part"/>
                                                                <label for="chkAvoidBrushingAnyPart">Do you avoid brushing any part of your mouth because
                                                                    of pain?</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkGumsBleed" name="chkGumsBleed" value="Gums Bleed"/>
                                                                <label for="chkGumsBleed">Do your gums bleed when you floss?</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkGumsFeelSwollen" name="chkGumsFeelSwollen" value="Gums Feel Swollen"/>
                                                                <label for="chkGumsFeelSwollen">Do your gums feel swollen or tender?</label>
                                                            </p><br>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <p>
                                                                <input type="checkbox" id="chkTeethSensitive" name="chkTeethSensitive" value="Teeth Sensitive"/>
                                                                <label for="chkTeethSensitive">Are your teeth sensitive?</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkHurtWhenChew" name="chkHurtWhenChew" value="Hurt When Chew"/>
                                                                <label for="chkHurtWhenChew">Does it hurt when you chew or open wide to take a
                                                                    bite?</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkNoticedSlowHealing" name="chkNoticedSlowHealing" value="Noticed Slow Healing"/>
                                                                <label for="chkNoticedSlowHealing">Have you ever noticed slow-healing sores in or about your
                                                                    mouth?</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkBlowToTheJaw" name="chkBlowToTheJaw" value="Blow To The Jaw"/>
                                                                <label for="chkBlowToTheJaw">Have you had a blow to the jaw (trauma)?</label>
                                                            </p><br>
                                                            <p>
                                                                <input type="checkbox" id="chkPainInTheFaceAnd" name="chkPainInTheFaceAnd" value="Pain In The FaceAnd"/>
                                                                <label for="chkPainInTheFaceAnd">Do you have pain in the face, cheeks, jaws, joints, throat, or
                                                                    temples?</label>
                                                            </p><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <label>Are you a habitual</label>
                                                            <br><br>
                                                            <div class="col s2">
                                                                <input type="checkbox" id="chkGumChewer" name="chkGumChewer" value="Gum Chewer"/>
                                                                <label for="chkGumChewer">Gum chewer?</label>
                                                            </div>
                                                            <div class="col s2">
                                                                <input type="checkbox" id="chkPipeSmoker" name="chkPipeSmoker" value="Pipe Smoker"/>
                                                                <label for="chkPipeSmoker">Pipe smoker?</label>
                                                            </div>
                                                            <div class="col s2">
                                                                <input type="checkbox" id="chkBetelChewer" name="chkBetelChewer" value="Betel Chewer"/>
                                                                <label for="chkBetelChewer">Betel chewer?</label>
                                                            </div>
                                                            <div class="col s2">
                                                                <input type="checkbox" id="chkCigarette" name="chkCigarette" value="Cigarette"/>
                                                                <label for="chkCigarette">Cigarette smoker?</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <label>Do you feel twinges of pain when your teeth come in contact with</label>
                                                            <br><br>
                                                            <div class="col s2">
                                                                <input type="checkbox" id="chkHotFood" name="chkHotFood" value="Hot Food"/>
                                                                <label for="chkHotFood">Hot foods or liquids?</label>
                                                            </div>
                                                            <div class="col s2">
                                                                <input type="checkbox" id="chkSours" name="chkSours" value="Sours"/>
                                                                <label for="chkSours">Sours?</label>
                                                            </div>
                                                            <div class="col s2">
                                                                <input type="checkbox" id="chkColdFood" name="chkColdFood" value="Cold Food"/>
                                                                <label for="chkColdFood">Cold foods or liquids?</label>
                                                            </div>
                                                            <div class="col s2">
                                                                <input type="checkbox" id="chkSweets" name="chkSweets" value="Sweets"/>
                                                                <label for="chkSweets">Sweets?</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s6">
                                                            <i class="mdi-communication-messenger prefix"></i>
                                                            <textarea id="txtOther" class="materialize-textarea" name="txtOther"></textarea>
                                                            <label for="txtOther">Other</label>
                                                        </div>                                
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Save</a>
                                            </div>
                                        </div> <br><br>

                                        <p>Past Treatments : <span class="customClass"><b>Wound treatment</b></span></p> 

                                        <!-- Modal Trigger -->
                                        <a class="modal-trigger waves-effect waves-light btn-flat right" href="#modal4">Edit past treatments</a>

                                        <!-- Modal Structure -->
                                        <div id="modal4" class="modal modal-fixed-footer">
                                            <div class="modal-content">


                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-social-mood prefix"></i>
                                                        <label>Past Treatments</label>
                                                        <br>
                                                        <br>
                                                        <div class="col s2">
                                                            <p>
                                                                <input type="checkbox" id="chkRemoval" name="chkRemoval" value="Removal"/>
                                                                <label for="chkRemoval">Removal</label>
                                                            </p>
                                                            <p>
                                                                <input type="checkbox" id="chkWoundTreatment" name="chkWoundTreatment" value="Wound Treatment"/>
                                                                <label for="chkWoundTreatment">Wound treatment</label>
                                                            </p>
                                                        </div>
                                                        <div class="col s2">
                                                            <p>
                                                                <input type="checkbox" id="chkFillings" name="chkFillings" value="Fillings"/>
                                                                <label for="chkFillings">Fillings</label>
                                                            </p>
                                                            <p>
                                                                <input type="checkbox" id="chkSealants" name="chkSealants" value="Sealants"/>
                                                                <label for="chkSealants">Sealants</label>
                                                            </p>
                                                        </div>
                                                        <div class="col s2">
                                                            <p>
                                                                <input type="checkbox" id="chkRetainers" name="chkRetainers" value="Retainers"/>
                                                                <label for="chkRetainers">Retainers</label>
                                                            </p>
                                                            <p>
                                                                <input type="checkbox" id="chkBraces" name="chkBraces" value="Braces"/>
                                                                <label for="chkBraces">Braces</label>
                                                            </p>
                                                        </div>
                                                        <div class="col s2">
                                                            <p>
                                                                <input type="checkbox" id="chkCleaning" name="chkCleaning" value="Cleaning"/>
                                                                <label for="chkCleaning">Cleaning</label>
                                                            </p>
                                                            <p>
                                                                <input type="checkbox" id="chkPolishing" name="chkPolishing" value="Polishing"/>
                                                                <label for="chkPolishing">Polishing</label>
                                                            </p>
                                                        </div>
                                                        <div class="col s2">
                                                            <p>
                                                                <input type="checkbox" id="chkBridges" name="chkBridges" value="Bridges"/>
                                                                <label for="chkBridges">Bridges</label>
                                                            </p>
                                                            <p>
                                                                <input type="checkbox" id="chkDentures" name="chkDentures" value="Dentures"/>
                                                                <label for="chkDentures">Dentures</label>
                                                            </p>
                                                        </div>
                                                        <div class="col s2">
                                                            <p>
                                                                <input type="checkbox" id="chkImplants" name="chkImplants" value="Implants"/>
                                                                <label for="chkImplants">Implants</label>
                                                            </p>
                                                        </div>  
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Save</a>
                                            </div>
                                        </div><br><br>

                                        <p><h5>Dental Examination</h5></p>
                                        <div class="row">
                                            <form class="col s12">
                                                <div class="row">
                                                    <div class="input-field col s10">
                                                        <i class="mdi-action-account-circle prefix"></i>
                                                        <input id="txtComment" type="text" class="validate" required>
                                                        <label for="txtComment">Comment</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s10">
                                                        <i class="mdi-action-account-circle prefix"></i>
                                                        <input id="txtReason" type="text" class="validate" required>
                                                        <label for="txtReason">Reason</label>
                                                    </div>
                                                </div>
                                                <div class="file-field input-field s10">
                                                    <input class="file-path validate" type="text"/>
                                                    <div class="btn">
                                                        <span>File</span>
                                                        <input type="file" />
                                                    </div>
                                                </div>

                                            </form>
                                        </div>



                                        <p><h5>Treatment Needs</h5></p>
                                        <!--<p>Urgent Treatment</p>
                                        <p>Restorative Care</p>
                                        <p>Preventive Care</p>
                                        <p>Other</p>-->
                                        <!--<p>-->
                                        <input class="with-gap" name="radTreatment" type="radio" value="urgent" id="chkUrgentTreatment">
                                        <label for="chkUrgentTreatment">Urgent Treatment</label>
                                        <!--</p>-->

                        <!--<p>-->
                                        <input class="with-gap" name="radTreatment" type="radio" value="restorative" id="chkRestorativeCare">
                                        <label for="chkRestorativeCare">Restorative Care</label>
                                        <!--</p>-->

                        <!--<p>-->
                                        <input class="with-gap" name="radTreatment" type="radio" value="preventive" id="chkPreventiveCare">
                                        <label for="chkPreventiveCare">Preventive Care</label>
                                        <!--</p>-->

                        <!--<p>-->
                                        <input class="with-gap" name="radTreatment" type="radio" value="other" id="chkOtherTreatment">
                                        <label for="chkOtherTreatment">Other</label>
                                        <!--</p>-->
                                        <br> <br>
                                        <p><h5>Drug Needs</h5></p>
                                        <div class="row">
                                            <div class="input-field col s10">
                                                <i class="mdi-action-account-circle prefix"></i>
                                                <input id="txtReason" type="text" class="validate" required>
                                                <label for="txtReason">Drugs</label>
                                            </div>
                                        </div>
                                        
                                         <button type="submit" name="save" value="save"  class="waves-effect waves-light btn right">Save<i class="mdi-content-save right"></i></button>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>







            </div>
            <!--<div class="row center light-blue lighten-5">
                <img src="img/auqa_vertical.png">
            </div>-->
        </div>
        <div class="footer-copyright light-blue lighten-5">
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
        <!--<script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script src="js/dropdown.js"></script>
        <script src="js/pick.js"></script>-->
        <!--<script src="js/bootstrap.min.js"></script>-->
        <script src="<?php echo base_url(); ?>/js/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>/js/materialize.js"></script>
        <script src="<?php echo base_url(); ?>/js/init.js"></script>
        <script src="<?php echo base_url(); ?>/js/min/perfect-scrollbar.jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/js/min/perfect-scrollbar.min.js"></script>
        <script src="<?php echo base_url(); ?>/js/modal-fixed-footer.js"></script>
        <script type="text/javascript">
            function changeSize() {
                var width = 300;
                var height = 600;
                $("#Demo").width(width).height(height);
                // update scrollbars
                $('#Demo').perfectScrollbar('update');
            }
            $(function() {
                $('#Demo').perfectScrollbar();
            });

            $(document).ready(function() {
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
            });

            $('.modal-trigger').leanModal({
                dismissible: true, // Modal can be dismissed by clicking outside of the modal
                opacity: .5, // Opacity of modal background
                in_duration: 300, // Transition in duration
                out_duration: 200, // Transition out duration


            }
            );
        </script>


    </body>
</html>
