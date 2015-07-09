<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Smart DentAssist - Home! </title>

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
                <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/patient_registration_new");?>">Patient Registration</a></li>
                <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/dental_history_new");?>">Dental History</a></li>
            </ul>
            <ul class="waves-effect waves-light side-nav" id="mobile-demo">
                <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/patient_registration_new");?>">Patient Registration</a></li>
                <li><a class="waves-effect waves-light" href="<?php echo base_url("/index.php/dental_history_new");?>">Dental History</a></li>
            </ul>
        </div>
    </nav>
    <div class="row center">
        <img src="<?php echo base_url();?>/img/auqa_vertical.png">
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
