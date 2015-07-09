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


        <title>Streaming-DentAssist</title>
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
                <div class="col s6 offset-s3">
                    <div class="video-container">
                        <!--object width="100%" height="350"><param name="movie" value="http://www.videowhisper.com/demos/livestreaming/live_watch.swf?n=Studio606" /><param name="base" value="http://www.videowhisper.com/demos/livestreaming/" /><param name="allowFullScreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="scale" value="noscale" /><param name="salign" value="lt" /><embed src="http://www.videowhisper.com/demos/livestreaming/live_watch.swf?n=Studio606" base="http://www.videowhisper.com/demos/livestreaming/" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="640" height="350" scale="noscale" salign="lt"></embed></object-->
                        <iframe width="100" height="80" src="http://www.videowhisper.com/demos/livestreaming/video_small.php?n=smartdent" frameborder="0" allowfullscreen></iframe>
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

