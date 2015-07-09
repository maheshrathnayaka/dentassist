<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Smart DentAssist - Profile! </title>

        <!-- CSS  -->
        <link href="<?php echo base_url(); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>/css/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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
            /*.titleText{*/
            /*font-size: 10px;*/
            /*}*/
        </style>
    </head>
    <body >
        <div>

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
<!--                    <a href="#" data-activates="mobile-demo" class="waves-effect waves-light button-collapse">
                        <i class="mdi-navigation-menu"></i>
                    </a>-->
<!--                    <ul class="right hide-on-med-and-down">
                        <li><a class="waves-effect waves-light" href="patient_registration">Patient Registration</a></li>
                        <li><a class="waves-effect waves-light" href="dental_history">Dental History</a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Direct FN<i class="mdi-navigation-arrow-drop-down right"></i></a></li>

                    </ul>-->
<!--                    <ul class="waves-effect waves-light side-nav" id="mobile-demo">
                        <li><a class="waves-effect waves-light" href="patient_registration">Patient Registration</a></li>
                        <li><a class="waves-effect waves-light" href="dental_history">Dental History</a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="mdi-navigation-arrow-drop-down right"></i></a></li>

                    </ul>-->
                </div>
            </nav>

           

                <div class="row">
                    <div class="col s3 grid-example">
                        
                                <div class="row">
                                    <div class="col s12">
                                        <img style="-webkit-user-select: none" src="http://previewcf.turbosquid.com/Preview/2014/05/12__18_29_02/teeth00SIG.jpg83ea5548-a898-4f8e-b156-981ad27ae176Res200.jpg"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <img style="-webkit-user-select: none" src="http://previewcf.turbosquid.com/Preview/2014/07/04__03_11_12/signature.jpg622b7139-3f88-4960-93d0-99f0bdd99236Res200.jpg"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <img style="-webkit-user-select: none" src="http://previewcf.turbosquid.com/Preview/2014/09/09__15_10_52/Teeth_02i.jpg3bb47b24-13ae-48b3-939a-01ca30e86830Res200.jpg"/>
                                    </div>
                                </div>
                       

                    </div>
<!--                    <div class="col s3 grid-example">
                       
                                <div class="row">
                                    <div class="col s12">
                                        <img style="-webkit-user-select: none" src="http://previewcf.turbosquid.com/Preview/2014/05/12__18_29_02/teeth00SIG.jpg83ea5548-a898-4f8e-b156-981ad27ae176Res200.jpg"/>
                                    </div>
                                </div>


                    </div>-->

                    <div class="col s9 grid-example">
                        <div class="row">
                            <div class="col s12">
                                <div class="panel panel-primary">
                                    <div class="panel panel-header">
                                        
                                         
                                        
                                    </div>
                                    <div class="panel panel-body">
                                        <div class="card-content white-text">
                                        <span class=""><h5><b>Hasith Malinga : M : 26 Years old : 1</b></h5></span>
                                        
                                        <div class="row">
                                            <form class="col s12">
                                                <div class="row">
                                                    <div class="input-field col s10">
                                                        <i class="mdi-action-account-circle prefix"></i>
                                                        <input id="txtComment" type="text" class="validate">
                                                        <label for="txtComment">Comment</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s10">
                                                        <i class="mdi-action-account-circle prefix"></i>
                                                        <input id="txtReason" type="text" class="validate">
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



                                        <p><b>Treatment Needs</b></p>
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
                                        <p><b>Drug Needs</b></p>
                                    </div>
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
        <script src="<?php echo base_url(); ?>/js/perfect-scrollbar.js"></script>
    </body>
</html>

