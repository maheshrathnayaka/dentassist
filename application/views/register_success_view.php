<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Register Success</title>
        <link href="<?php echo base_url(); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <script type="text/javascript">
            $(document).ready(function () {
                $('ul.tabs').tabs();
            });
            $(document).ready(function () {
                $('ul.tabs').tabs('select_tab', 'tab_id');
            });
            $(document).ready(function () {
                $('select').material_select()
                ;</script>
    </head>
    <!--    <body class="body-custom">    
            <div class="container cont-cust">
                <div class="row-fluid" style="margin-top: 60px;">
                    <h2>Congratulations !</h2>
                    <h3>Patient records has been saved successfully.</h3>
                </div>
            </div>  
        </body>-->


    <body class="light-blue lighten-4">
        <div class="container light-blue lighten-5">
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
            <div class="row center">
                <div class="row-fluid" style="margin-top: 60px;">
                    <h4>Congratulations !</h4>
                    <h5>Patient records has been saved successfully.</h5>
                    <?php // echo $barcode ?>
                    <img style="-webkit-user-select: none" src="http://shamalmahesh.net78.net/index.php/barcodetestcontroller_1/barcode/<?php echo $barcode ?>"/>

                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2015 Smart DentAssist - Final Year Project
            </div>
        </div>

<!-- <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script> -->
        <script src="<?php echo base_url(); ?>/js/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>/js/materialize.js"></script>
        <script src="<?php echo base_url(); ?>/js/init.js"></script>
    </body>

</html>
