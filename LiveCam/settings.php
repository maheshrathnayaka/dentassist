<?php

$rtmp_server = "rtmp://zv2gpz9c.mdn.onyxservers.com/livepkgr/dentassist";
// rtmp://your-server-ip-or-domain/application

$rtmp_amf = "";
// AMF3 : Red5, Wowza, FMIS3, FMIS3.5
// AMF0 : FCS1.5, FMS2
// blank for flash default

$rtmfp_server="rtmfp://stratus.adobe.com/f1533cc06e4de4b56399b10d-1a624022ff71/";
// RTMFP server for negotiangin P2P connections where possible
// Get your own independent developer key/address from: https://www.adobe.com/cfusion/entitlement/index.cfm?e=stratus

$tokenKey = "VideoWhisper";
// This can be used to secure access as configured in RTMP server settings (secureTokenSharedSecret).

$ban_names=Array("ban_name1", "ban_name2");
//ban channel or user names

$httpstreamer="dentassist?adbe-live-event=liveevent";
//path for HTTP Live Stre streaming usually available with Wowza hosting if packetizers are enabled
//use http://www.videowhisper.com/?p=Wowza+Media+Server+Hosting or see http://www.wowza.com/forums/content.php?217#cupertinostreaming


//usage limit (per channel and per viewer)
//default 2 hours per week limit
$maximumSessionTime=7200000; //7200000 ms = 2h; 0 for unlimited
$resetTime = 7 * 3600 * 24; //weekly
$limitChannel=1; //counts total channel time (sum of time online for broadcaster + viewers)
$limitUser=1; //counts total view time per user (watching all channels)

?>