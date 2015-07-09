<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <!-- CSS  -->
        <link href="<?php echo base_url(); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>/css/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>/css/pic_css/picedit.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>/css/doCSS.css" type="text/css" rel="stylesheet" media="screen,projection"/>


        <title>Consultation Support-DentAssist</title>
    </head>
    <body class="lime lighten-5">
        <div class="lime lighten-5">
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
                <div class="col s10 offset-s1"> 
                    <div class="row light-blue lighten-4 z-depth-4">
                        <div class="row">
                            <h4 class="center"><strong>Mahesh Rathnayake </strong>You have a new request</h4>
                            <h5 class="center">please click <a href="<?php echo base_url("/index.php/live_video"); ?>">this link</a> to open the live stream</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url(); ?>/js/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>/js/materialize.js"></script>
        <script src="<?php echo base_url(); ?>/js/init.js"></script>
        <script src="<?php echo base_url(); ?>/js/perfect-scrollbar.js"></script>
        <script src="<?php echo base_url(); ?>/js/pic_js/picedit.min.js"></script>
        <script src="<?php echo base_url(); ?>/js/custom.js"></script>
        <script src="<?php echo base_url(); ?>/js/doAjax.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('select').material_select();
            });
        </script>
    </body>
</html>
