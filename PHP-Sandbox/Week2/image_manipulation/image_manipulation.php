<?php
$im = imagecreatefromjpeg("photo.jpg");
header('Content-Type: image/jpeg');

$black = imagecolorallocate($im, 0, 0, 0);
$font = "AndaleMono.ttf"; //true type font in same path as script
$message = "Hello SSL!";
imagefttext($im, 32, 0, 50, 50, $black, $font, $message);

imagepng($im);
imagedestroy($im);
?>