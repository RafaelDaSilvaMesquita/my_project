<?php
$image = Imagecreatefromjpeg('glace.jpeg');
header('Content-Type: image/jpeg') ;
Imagejpeg($image, NULL, 80);
?>
