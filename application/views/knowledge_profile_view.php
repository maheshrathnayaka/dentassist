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
        <link href="<?php echo base_url(); ?>/css/pic_css/picedit.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>/css/doCSS.css" type="text/css" rel="stylesheet" media="screen,projection"/>        

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
        <!--<link href="<?php // echo base_url();         ?>/css/doCSS.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->        
        <style>
            .ui-autocomplete {
                max-height: 200px;
                overflow-y: auto;
                /* prevent horizontal scrollbar */
                overflow-x: hidden;
            }
            /* IE 6 doesn't support max-height
             * we use height instead, but this forces the menu to always be this tall
             */
            * html .ui-autocomplete {
                height: 200px;
            }
        </style>

<!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->




<!--<link href="<?php // echo base_url();          ?>/css/main.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->        
<!--<link href="<?php // echo base_url();          ?>/css/jquery.autocomplete.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->        
<!--<link href="<?php // echo base_url();          ?>/css/thickbox.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->                    
        <style type="text/css">
            ::-webkit-input-placeholder {
                color: #444;
            }
            /*            .btnMarginSet{
                            margin-left: 10px;
                        }*/
        </style>
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
                <form class="" role="form" action="<?php echo base_url(); ?>index.php/knowledge_profile/addRecord" method="post">
                    <div id="test1" class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="file" name="image" id="image">
                            </div>
                            <div class="input-field col s6">
                                <div class="row">
                                    <i class="mdi-communication-call-made prefix"></i>
                                    <input style="color: #444;" id="txtCommentImage" placeholder="Comment" name="txtCommentImage" type="text" class="validate">
                                </div>
                                <div class="row">
                                    <i class="mdi-communication-location-on prefix"></i>
                                    <input style="color: #444;" id="txtDescriptionImage" placeholder="Description" name="txtDescriptionImage" type="text" class="validate">
                                </div>
                                <div class="row">
                                    <button onclick="addImages();" type="button" name="btnAddEntryImage" value="btnAddEntryImage" class="light-green darken-4 right waves-effect waves-light btn">Add Entry<i class="mdi-navigation-refresh left"></i></button>
                                </div>
                                <div class="col s12">
                                    <div class="card-panel blue-grey lighten-5">
                                        <div class="row">
                                            <select id="selectDisease">
                                                <option value="0" disabled selected>Please Select Disease</option>
                                                <option value="1">Dental Caries</option>
                                                <option value="2">Periodental Disease</option>
                                                <option value="3">Gingivities</option>
                                                <option value="4">Adult Periodontitis</option>
                                                <option value="5">Early-Onset Periodontitis</option>
                                                <option value="6">Oral Cavities</option>
                                                <option value="7">Oral Human Papillomavirus Infection</option>
                                                <option value="8">Recurrent Apththous Ulcers</option>
                                            </select>
                                        </div>                               
                                        <div class="row">
                                            <select id="selectCategory">
                                                <option value="0" disabled selected>Please Select Category</option>
                                                <option value="1">Caries</option>
                                                <option value="2">Cavities</option>
                                                <option value="3">Periodental Disease</option>
                                                <option value="4">Cancer</option>
                                            </select>                                
                                        </div>
                                    </div>
                                </div>
                            </div>                                                    
                        </div>
                    </div>
                    <div class="col s12">                        
                        <div class="row">     
                            <div class="input-field col s6">
                                <i class="mdi-communication-call-made prefix"></i>
                                <input id="txtTreatment" name="txtTreatment" type="text" class="validate">
                                <label for="txtTreatment">Treatment</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="mdi-communication-location-on prefix"></i>
                                <input id="txtReason" name="txtReason" type="text" class="validate">
                                <label for="txtReason">Reason</label>
                            </div>                        
                        </div>
                    </div>
                    <!--<div class="col s12">-->
                    <br>
                    <table>
                        <thead>
                            <tr>
                                <th data-field="id" style="width: 350px;">Image</th>
                                <th data-field="name">Comment</th>
                                <th data-field="price">Description</th>
                                <th data-field="delete" style="width: 350px;">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="http://www.sonnefamilydental.com/Portals/0/b_1.jpg" width="250px" height="150px"/></td>
                                <td>Basic Stage</td>
                                <td></td>
                                <td>
                                    <button type="button" name="reset" value="reset" class="light-green darken-4 waves-effect waves-light btn tooltipped" data-position="top" data-delay="50" data-tooltip="Remove this entry"><i class="mdi-action-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="http://www.oneidanydentist.com/bonding_07_before.jpg" width="250px" height="150px"/></td>
                                <td>Damaged</td>
                                <td>Treatments needed quickly</td>
                                <td>
                                    <button type="button" name="reset" value="reset" class="light-green darken-4 waves-effect waves-light btn tooltipped" data-position="top" data-delay="50" data-tooltip="Remove this entry"><i class="mdi-action-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="http://0101.nccdn.net/1_5/1c9/248/332/rampant2.JPG" width="250px" height="150px"/></td>
                                <td>Damaged</td>
                                <td>Treatments needed quickly</td>
                                <td>
                                    <button type="button" name="reset" value="reset" class="light-green darken-4 waves-effect waves-light btn tooltipped" data-position="top" data-delay="50" data-tooltip="Remove this entry"><i class="mdi-action-delete"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <!--</div>-->
                    <div class="card-panel blue-grey lighten-5">
                        <div class="row">
                            <div class="input-field col s6" id="medicationTblDiv">
                                <br>
                                <table id="medicationTbl">
                                    <thead>
                                        <tr>
                                            <th data-field="id" style="width: 350px;">Medication Name</th>
                                            <th data-field="name">Dosage</th>
                                            <th data-field="name">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Panadol</td>
                                            <td>2 daily</td>                                            
                                            <td><button type="button" name="reset" value="reset" class="light-green darken-4 waves-effect waves-light btn tooltipped" data-position="top" data-delay="50" data-tooltip="Remove this entry"><i class="mdi-action-delete"></i></button></td>                                            
                                        </tr>
                                        <tr>
                                            <td>Amoxiline</td>
                                            <td>1 daily</td>
                                            <td><button type="button" name="reset" value="reset" class="light-green darken-4 waves-effect waves-light btn tooltipped" data-position="top" data-delay="50" data-tooltip="Remove this entry"><i class="mdi-action-delete"></i></button></td>                                            
                                        </tr>
                                        <tr>
                                            <td>Paracitamolt</td>
                                            <td>2 daily</td>
                                            <td><button type="button" name="reset" value="reset" class="light-green darken-4 waves-effect waves-light btn tooltipped" data-position="top" data-delay="50" data-tooltip="Remove this entry"><i class="mdi-action-delete"></i></button></td>                                            
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>

                            <div class="input-field col s6">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="mdi-communication-call-made prefix"></i>
                                        <input id="txtMedicationName" name="txtMedicationName" type="text" class="validate ac_input">
                                        <label for="txtMedicationName">Medication Name</label>                            
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="mdi-communication-location-on prefix"></i>
                                        <input id="txtDosage" name="txtDosage" type="text" class="validate">
                                        <label for="txtDosage">Dosage</label>
                                    </div> 
                                </div>
                                <div class="row">                           
                                    <div class="input-field col s6 right">
                                        <button type="button" id="btnAddEntryMedication" name="btnAddEntryMedication" value="btnAddEntryMedication" class="light-green darken-4 right waves-effect waves-light btn">Add Entry<i class="mdi-navigation-refresh left"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="col s12">
                        <div class="row right">
                            <button type="reset" name="reset" value="reset" class="waves-effect waves-light btn btnMarginSet">Reset<i class="mdi-navigation-refresh left"></i></button>
                            <button type="submit" name="register" value="register"  class="waves-effect waves-light btn btnMarginSet">Save<i class="mdi-content-save left"></i></button>
                            <button type="submit" name="cancel" value="cancel" class="waves-effect waves-light btn btnMarginSet">Cancel<i class="mdi-navigation-cancel left"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2015 Smart DentAssist - Final Year Project
                </div>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>/js/jquery-2.1.3.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>/js/materialize.js"></script>
        <script src="<?php echo base_url(); ?>/js/init.js"></script>
        <script src="<?php echo base_url(); ?>/js/perfect-scrollbar.js"></script>
        <script src="<?php echo base_url(); ?>/js/pic_js/picedit.min.js"></script>
        <script src="<?php echo base_url(); ?>/js/custom.js"></script>
        <script src="<?php echo base_url(); ?>/js/doAjax.js"></script>
        <!--<script src="<?php // echo base_url(); ?>/js/do.js"></script>-->
        <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('select').material_select();
                                        });
                                        $(document).ready(function() {
                                            $('.tooltipped').tooltip({delay: 50});
                                        });
        </script>
    </body>
</html>
