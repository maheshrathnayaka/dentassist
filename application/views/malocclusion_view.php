<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Smart DentAssist - 3D Model </title>

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
                <div id="test1" class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <!--<img class="materialboxed" width="600" src="../img/teeth.jpg">-->
                            <div class="input-field col s1">
                            </div>
                            <img class="materialboxed" src="../img/B.PNG">
                            <br/>
                            <br/>
                            <div class="input-field col s1">
                            </div>
                            <img class="materialboxed" src="../img/C.PNG">
                            <br/>
                            <br/>
                            <div class="input-field col s1">
                            </div>
                            <img class="materialboxed" src="../img/D.PNG">
                        </div>
                        <div class="input-field col s6">
                            <div class="row">
                                <br/>
                                <footer class="page-footer large">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col l6 s12">
                                                <h5 class="white-text">Class II Division 1</h5>
                                                <p class="grey-text text-lighten-4">Occurs when the permanent first molars  
                                                      and the permanent maxillary central incisors are either normal or slightly
                                                    protruded out toward the lips.</p>

                                            </div>
                                            <div class="col l4 offset-l2 s12">
                                                <!--<h5 class="white-text">Models</h5>-->
                                                <ul>
                                                    <a href="<?php echo base_url(); ?>index.php/malocclusion_3dmodel/classBmiled" class="waves-effect waves-light btn" type="button"  style="width: 140px;">Mild</a>
                                                    <a href="<?php echo base_url(); ?>index.php/malocclusion_3dmodel/classBmoderate" class="waves-effect waves-light btn" type="button">Moderate</a>
                                                    <a href="<?php echo base_url(); ?>index.php/malocclusion_3dmodel/classBsevere" class="waves-effect waves-light btn" type="button" style="width: 140px;">Severe</a>                               
                                                </ul>
                                            </div>
                                        </div>
                                    </div>                               
                                </footer>
                            </div>
                            <div class="row">
                                <!--<br/>-->
                                <br/>
                                <footer class="page-footer large">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col l6 s12">
                                                <h5 class="white-text">Class II Division 2</h5>
                                                <p class="grey-text text-lighten-4">Occurs when the permanent first molars  
                                                     and the permanent maxillary central incisors are retruded (pulled backward toward 
                                                    the oral cavity) and tilting inwards towards the tongue.</p>
                                            </div>
                                            <div class="col l4 offset-l2 s12">
                                                <!--<h5 class="white-text">Models</h5>-->
                                                <ul>
                                                    <a href="<?php echo base_url(); ?>index.php/malocclusion_3dmodel/classCmiled" class="waves-effect waves-light btn" type="button" style="width: 140px;">Mild</a>
                                                    <a href="<?php echo base_url(); ?>index.php/malocclusion_3dmodel/classCmoderate" class="waves-effect waves-light btn" type="button">Moderate</a>
                                                    <a href="<?php echo base_url(); ?>index.php/malocclusion_3dmodel/classCsevere" class="waves-effect waves-light btn" type="button" style="width: 140px;">Severe</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>                               
                                </footer>
                            </div>
                            <div class="row">
                                <!--<br/>-->
                                <br/>
                                <footer class="page-footer large">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col l6 s12">
                                                <h5 class="white-text">Class III</h5>
                                                <p class="grey-text text-lighten-4">In this classification, 
                                                    the maxillary first molar is more to the back of the mandibular
                                                    first molar than normal; the buccal groove of the mandibular first molar is mesial 
                                                    to the mesiobuccal cusp of the maxillary first molar.  The facial profile is 
                                                    termed prognathic.</p>
                                            </div>
                                            <div class="col l4 offset-l2 s12">
                                                <!--<h5 class="white-text">Models</h5>-->
                                                <ul>
                                                    <a href="<?php echo base_url(); ?>index.php/malocclusion_3dmodel/classDmiled" class="waves-effect waves-light btn" type="button" style="width: 140px;">Mild  </a>
                                                    <a href="<?php echo base_url(); ?>index.php/malocclusion_3dmodel/classDmoderate" class="waves-effect waves-light btn" type="button">Moderate</a>
                                                    <a href="<?php echo base_url(); ?>index.php/malocclusion_3dmodel/classDsevere" class="waves-effect waves-light btn" type="button" style="width: 140px;">Severe  </a>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>                               
                                </footer>
                            </div>
                        </div>                                                        
                    </div>
                </div> 
            </div>
        </div>
    </body>
</html>


