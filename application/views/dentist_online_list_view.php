<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Smart DentAssist - Online Dentists! </title>

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
                    success: function (data) {

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

            
            <div class="row">
                <h2>Available list of specialists / Consultants </h2>
            </div>
                <div class="row">
                    <div class="col s3 grid-example" id="Demo">

                        <div class="row">
                            <div class="col s10">
                                <div class="card blue-grey darken-1">
                                    <div class="card-content white-text">
                                        <span class=""><b>Hasith Malinga</b></span>
                                        <p>Consultant</p>
                                        <p>Durdens Hospital</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s10">
                                <div class="card blue-grey darken-1">
                                    <div class="card-content white-text">
                                        <span class=""><b>Shamal Mahesh</b></span>
                                        <p>Dental Specialist</p>
                                        <p>General Hospital - Colombo</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s10">
                                <div class="card blue-grey darken-1">
                                    <div class="card-content white-text">
                                        <span class=""><b>Eshan Daminda</b></span>
                                        <p>Dentist</p>
                                        <p>Teaching Hospital - Kandy</p>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="col s9 grid-example">
                        <div class="row">
                            <div class="col s12">
                                <div class="card  light-green darken-1">
                                    <div class="card-content white-text">
                                        
                                        <p>Name : <span class="customClass"><b>Hasith Malinga</b></span></p>
                                        <p>Designation : <span class="customClass"><b>Consultant</b></span></p>
                                        <p>Destination/Hospital : <span class="customClass"><b>Durdens Hospital</b></span></p>
                                        <p>Past Experience : <span class="customClass"><b>Testing Experience Comment</b></span></p>                    
                                        
                                        <button type="reset" name="reset" value="reset" class="waves-effect waves-light btn">Send request<i class="mdi-navigation-refresh left"></i></button>
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
        <script type="text/javascript">
            function changeSize() {
                var width = 300;
                var height = 600;
                $("#Demo").width(width).height(height);
                // update scrollbars
                $('#Demo').perfectScrollbar('update');
            }
            $(function () {
                $('#Demo').perfectScrollbar();
            });
        </script>
    </body>
</html>
