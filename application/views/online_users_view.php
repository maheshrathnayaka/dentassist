<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

        <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
        <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <!-- Please download the JW Player plugin from http://www.longtailvideo.com/jw-player/download -->
        <script type="text/javascript" src="/js/jwplayer/jwplayer.js"></script>
        <script language="JavaScript" src="/js/scriptcam.js"></script>
        <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>/css/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <script>
            $(document).ready(function () {
                $("#webcam").scriptcam({
                    fileReady: fileReady,
                    cornerRadius: 20,
                    cornerColor: 'e3e5e2',
                    onError: onError,
                    promptWillShow: promptWillShow,
                    showMicrophoneErrors: false,
                    showDebug: true,
                    onWebcamReady: onWebcamReady,
                    setVolume: setVolume,
                    timeLeft: timeLeft,
                    fileName: 'demo741663',
                    width: 640,
                    height: 480,
                    connected: showRecord
                });
                setVolume(0);
                $("#slider").slider({animate: true, min: 0, max: 100, value: 50, orientation: 'vertical', disabled: true});
                $("#slider").bind("slidechange", function (event, ui) {
                    $.scriptcam.changeVolume($("#slider").slider("option", "value"));
                });
            });
            function showRecord() {
                $("#recordStartButton").attr("disabled", false);
            }
            function startRecording() {
                $("#recordStartButton").attr("disabled", true);
                $("#recordStopButton").attr("disabled", false);
                $("#recordPauseResumeButton").attr("disabled", false);
                $.scriptcam.startRecording();
            }
            function closeCamera() {
                $("#slider").slider("option", "disabled", true);
                $("#recordPauseResumeButton").attr("disabled", true);
                $("#recordStopButton").attr("disabled", true);
                $.scriptcam.closeCamera();
                $('#message').html('Please wait for the file conversion to finish...');
            }
            function pauseResumeCamera() {
                if ($("#recordPauseResumeButton").html() == 'Pause Recording') {
                    $("#recordPauseResumeButton").html("Resume Recording");
                    $.scriptcam.pauseRecording();
                }
                else {
                    $("#recordPauseResumeButton").html("Pause Recording");
                    $.scriptcam.resumeRecording();
                }
            }
            function fileReady(fileName) {
                $('#recorder').hide();
                fileName2 = fileName.replace('mp4', 'gif');
                $('#message').html('The MP4 file is now dowloadable for five minutes over <a href="' + fileName + '">here</a>. The animated GIF can be downloaded <a href="' + fileName2 + '">here</a>.');
                var fileNameNoExtension = fileName.replace(".mp4", "");
                jwplayer("mediaplayer").setup({
                    width: 320,
                    height: 240,
                    file: fileName,
                    image: fileNameNoExtension + '_0000.jpg',
                    tracks: [{
                            file: fileNameNoExtension + '.vtt',
                            kind: 'thumbnails'
                        }]
                });
                $('#mediaplayer').show();
            }
            function onError(errorId, errorMsg) {
                alert(errorMsg);
            }
            function onWebcamReady(cameraNames, camera, microphoneNames, microphone, volume) {
                $("#slider").slider("option", "disabled", false);
                $("#slider").slider("option", "value", volume);
                $.each(cameraNames, function (index, text) {
                    $('#cameraNames').append($('<option></option>').val(index).html(text))
                });
                $('#cameraNames').val(camera);
                $.each(microphoneNames, function (index, text) {
                    $('#microphoneNames').append($('<option></option>').val(index).html(text))
                });
                $('#microphoneNames').val(microphone);
            }
            function promptWillShow() {
                alert('A security dialog will be shown. Please click on ALLOW.');
            }
            function setVolume(value) {
                value = parseInt(32 * value / 100) + 1;
                for (var i = 1; i < value; i++) {
                    $('#LedBar' + i).css('visibility', 'visible');
                }
                for (i = value; i < 33; i++) {
                    $('#LedBar' + i).css('visibility', 'hidden');
                }
            }
            function timeLeft(value) {
                $('#timeLeft').val(value);
            }
            function changeCamera() {
                $.scriptcam.changeCamera($('#cameraNames').val());
            }
            function changeMicrophone() {
                $.scriptcam.changeMicrophone($('#microphoneNames').val());
            }
        </script>        
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
                <div class="col s3 green accent-1">
                    <div class="row">
                        <!-- <div class="card-panel light-green lighten-2">Thavindu Hasantha</div>
                         <div class="card-panel light-green lighten-2">Mahesh Rathnayake</div>
                         <div class="card-panel light-green lighten-2">Eshan Kumara</div>
                         <div class="card-panel light-green lighten-2">Kavindi</div> -->
                        <h4>Online Consultants</h4>                        
                            <p>
                                <input name="group1" type="radio" id="test1" checked="true"/>
                                <label for="test1">Hasith Malinga</label>
                            </p>                        
                            <p>
                                <input name="group1" type="radio" id="test2" />
                                <label for="test2">Mahesh Rathnayake</label>
                            </p>                        
                            <p>
                                <input name="group1" type="radio" id="test3"  />
                                <label for="test3">Eshan Kumara</label>
                            </p>                        
                            <p>
                                <input name="group1" type="radio" id="test4" />
                                <label for="test4">Kavindi</label>
                            </p>                        
                    </div>
                    <div class="row">
                        <h5 class="center">Send request<br>to a consultant.</h5>

                        <div class="input-field center">
                            <button class="btn waves-effect waves-light btnMarginSet" type="submit" name="submit" value="submit">Request Help</button>
                        </div> 
                    </div>
                </div>

                <div class="col s9">
                    <div class="teal lighten-5">
                        <div class="container">
                            <div id="message"></div>
                            <div id="recorder">
                                <div id="webcam">
                                </div>
                                <div id="volumePanel" style="float:left;position:relative;top:10px;">
                                    <div id="volumeMeter" style="position:absolute;top:10px;left:7px;float:left;">

                                    </div>
                                    <div id="slider" style="position:absolute;top:10px;left:30px;">
                                    </div>
                                </div>
                                <br clear="both"/>
                                <div id="setupPanel col s6">
                                    <div class="col s6">
                                        <img src="/img/camera/webcamlogo.png" style="vertical-align:text-top"/>
                                        <select id="cameraNames" size="1" onChange="changeCamera()">
                                        </select>
                                    </div>
                                    <div class="col s6">
                                        <img src="/img/camera/miclogo.png" style="vertical-align:text-top;padding-left:45px;"/>
                                        <select id="microphoneNames" size="1" onChange="changeMicrophone()">
                                        </select>
                                    </div>                               
                                </div>
                                <br/>

                            </div>
                            <div id="mediaplayer" style="display:none;"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url(); ?>/js/materialize.js"></script>
    <script src="<?php echo base_url(); ?>/js/init.js"></script>
    <script src="<?php echo base_url(); ?>/js/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url(); ?>/js/pic_js/picedit.min.js"></script>
    <script type="text/javascript">
                                        $(document).ready(function () {
                                            $('select').material_select();
                                        });
    </script>
</body>
</html>

