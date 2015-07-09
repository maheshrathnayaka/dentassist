<?php
if(!isset($barcode)){
    echo 'not set';
}  else {

    // Including all required classes
require_once('class/BCGFontFile.php');
require_once('class/BCGColor.php');
require_once('class/BCGDrawing.php');

// Including the barcode technology
require_once('class/BCGcode39.barcode.php');
// Loading Font
$font = new BCGFontFile('./font/Arial.ttf', 18);

// Don't forget to sanitize user inputs
//$text = isset($_GET['text']) ? $_GET['text'] : 'Eshan';

//function random_stringen($length) {
//    $key = '';
//    //$keys = array_merge(range(0, 9), range('a', 'z'));
//    $keys = array_merge(range(0, 9));
//
//    for ($i = 0; $i < $length; $i++) {
//        $key .= $keys[array_rand($keys)];
//    }
//
//    return $key;
//}
//
//$text = random_stringen(12);

$text = $barcode;

// The arguments are R, G, B for color.
$color_black = new BCGColor(0, 0, 0);
$color_white = new BCGColor(255, 255, 255);

$drawException = null;
try {
    $code = new BCGcode39();
    $code->setScale(2); // Resolution
    $code->setThickness(30); // Thickness
    $code->setForegroundColor($color_black); // Color of bars
    $code->setBackgroundColor($color_white); // Color of spaces
    $code->setFont($font); // Font (or 0)
    $code->parse($text); // Text
} catch(Exception $exception) {
    $drawException = $exception;
}

/* Here is the list of the arguments
1 - Filename (empty : display on screen)
2 - Background color */
$drawing = new BCGDrawing('', $color_white);
if($drawException) {
    $drawing->drawException($drawException);
} else {
    $drawing->setBarcode($code);
    $drawing->draw();
}

// Header that says it is an image (remove it if you save the barcode to a file)
header('Content-Type: image/png');
header('Content-Disposition: inline; filename="barcode.jpeg"');


 echo '<div class="container">'.$drawing->finish(BCGDrawing::IMG_FORMAT_JPEG).'</div>';
    
    
}


?>
