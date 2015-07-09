<html>
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
        /*.titleText{*/
        /*font-size: 10px;*/
        /*}*/
    </style>
</head>
<body class="light-blue lighten-5">

    <div class="light-blue lighten-5">

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
            <div class="col s12">

                <div class="col s5">
                    
                </div>
                <div class="col s2">
                    <div class="row">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons">send</i>
                        </button>

                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons">send</i>
                        </button>

                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons">send</i>
                        </button>

                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons">send</i>
                        </button>

                    </div>
                </div>
                <div class="col s5">

                </div>

            </div>
        </div>

    </div>
</body>
</html>


