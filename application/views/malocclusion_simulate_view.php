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
                        <div class="input-field col s3">

                            <div class="row">

                            </div>
                            <div class="row">

                            </div>
                            <div class="row">


                            </div>

                            <div class="row">
                                <button class="btn waves-effect waves-light" type="button" name="action" onclick="classB();">Class II
                                    <i class="mdi-content-send right"></i>
                                </button>
                            </div>
                            <div class="row">
                                <button class="btn waves-effect waves-light" type="button" name="action" onclick="classC();">Class III
                                    <i class="mdi-content-send right"></i>
                                </button>
                            </div>
                           
<!--                            <div class="row">
                                <button class="btn waves-effect waves-light" type="button" name="action" onclick="buttonclick();">
                                    <i class="mdi-content-send right"></i>
                                </button>
                            </div>-->
                        </div>

                        <div class="input-field col s9">

                            <!--<img class="responsive-img" src="../img/C.PNG">-->

                            <!--//////////////////////////////-->


                            <canvas id="myCanvas" width="1000px" height="500px"></canvas>
                            <script>
                                function buttonclick() {
                                    function loadImages(sources, callback) {
                                        var images = {};
                                        var loadedImages = 0;
                                        var numImages = 0;
                                        // get num of sources
                                        for (var src in sources) {
                                            numImages++;
                                        }
                                        for (var src in sources) {
                                            images[src] = new Image();
                                            images[src].onload = function () {
                                                if (++loadedImages >= numImages) {
                                                    callback(images);
                                                }
                                            };
                                            images[src].src = sources[src];
                                        }
                                    }


                                    var canvas = document.getElementById('myCanvas');
                                    var context = canvas.getContext('2d');


                                    var sources = {
                                        darthVader: '../img/D.PNG',
                                        yoda: '../img/B.PNG'
                                    };
                                    loadImages(sources, function (images) {



                                        var delay = 1000; //1 seconds

                                        setTimeout(function () {
                                            context.drawImage(images.darthVader, 100, 10, 500, 500);
                                            setTimeout(function () {
                                                context.drawImage(images.yoda, 100, 10, 500, 500);
                                                setTimeout(function () {
                                                    context.drawImage(images.darthVader, 100, 10, 500, 500);
                                                    setTimeout(function () {
                                                        context.drawImage(images.yoda, 100, 10, 500, 500);
                                                        setTimeout(function () {
                                                            context.drawImage(images.darthVader, 100, 10, 500, 500);
                                                            setTimeout(function () {
                                                                context.drawImage(images.yoda, 100, 10, 500, 500);
                                                            }, delay);
                                                        }, delay);
                                                    }, delay);
                                                }, delay);
                                            }, delay);
//                                        context.drawImage(images.dathVader, 100, 30, 200, 137);
                                        }, delay);


                                    });

                                }


                                function classB() {
                                    function loadImages(sources, callback) {
                                        var images = {};
                                        var loadedImages = 0;
                                        var numImages = 0;
                                        // get num of sources
                                        for (var src in sources) {
                                            numImages++;
                                        }
                                        for (var src in sources) {
                                            images[src] = new Image();
                                            images[src].onload = function () {
                                                if (++loadedImages >= numImages) {
                                                    callback(images);
                                                }
                                            };
                                            images[src].src = sources[src];
                                        }
                                    }


                                    var canvas = document.getElementById('myCanvas');
                                    var context = canvas.getContext('2d');

                                    var sources = {
                                        A: '../img/2.JPG',
                                        B: '../img/3.JPG',
                                        C: '../img/4.JPG',
                                        D: '../img/5.JPG',
                                        E: '../img/6.JPG'
                                    };

                                    loadImages(sources, function (images) {



                                        var delay = 1000; //1 seconds

                                        setTimeout(function () {
                                            context.drawImage(images.A, 100, 10, 500, 500);
                                            setTimeout(function () {
                                                context.drawImage(images.B, 100, 10, 500, 500);
                                                setTimeout(function () {
                                                    context.drawImage(images.C, 100, 10, 500, 500);
                                                    setTimeout(function () {
                                                        context.drawImage(images.D, 100, 10, 500, 500);
                                                        setTimeout(function () {
                                                            context.drawImage(images.E, 100, 10, 500, 500);
                                                            setTimeout(function () {
                                                                context.drawImage(images.E, 100, 10, 500, 500);
                                                            }, delay);
                                                        }, delay);
                                                    }, delay);
                                                }, delay);
                                            }, delay);
//                                        context.drawImage(images.dathVader, 100, 30, 200, 137);
                                        }, delay);


                                    });

                                }



                                function classC() {
                                    function loadImages(sources, callback) {
                                        var images = {};
                                        var loadedImages = 0;
                                        var numImages = 0;
                                        // get num of sources
                                        for (var src in sources) {
                                            numImages++;
                                        }
                                        for (var src in sources) {
                                            images[src] = new Image();
                                            images[src].onload = function () {
                                                if (++loadedImages >= numImages) {
                                                    callback(images);
                                                }
                                            };
                                            images[src].src = sources[src];
                                        }
                                    }


                                    var canvas = document.getElementById('myCanvas');
                                    var context = canvas.getContext('2d');

                                    var sources = {
                                        A: '../img/7.JPG',
                                        B: '../img/8.JPG',
                                        C: '../img/9.JPG',
                                        D: '../img/10.JPG',
                                        E: '../img/11.JPG'
                                    };

                                    loadImages(sources, function (images) {



                                        var delay = 1000; //1 seconds

                                        setTimeout(function () {
                                            context.drawImage(images.A, 100, 10, 500, 500);
                                            setTimeout(function () {
                                                context.drawImage(images.B, 100, 10, 500, 500);
                                                setTimeout(function () {
                                                    context.drawImage(images.C, 100, 10, 500, 500);
                                                    setTimeout(function () {
                                                        context.drawImage(images.D, 100, 10, 500, 500);
                                                        setTimeout(function () {
                                                            context.drawImage(images.E, 100, 10, 500, 500);
                                                            setTimeout(function () {
                                                                context.drawImage(images.E, 100, 10, 500, 500);
                                                            }, delay);
                                                        }, delay);
                                                    }, delay);
                                                }, delay);
                                            }, delay);
//                                        context.drawImage(images.dathVader, 100, 30, 200, 137);
                                        }, delay);


                                    });

                                }


                            </script>




                            <!--/////////////////////////////////////-->




                        </div>                                                        
                    </div>
                </div> 


            </div>

        </div>
    </body>
</html>


