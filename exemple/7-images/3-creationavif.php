<?php
// Image
$dir = 'img/';
$name = 'glace.jpeg';
$newName = 'glace.avif';

print_r (gd_info());
$img = imagecreatefromjpeg($name);

imageavif($img, $dir.$newName,80);
?>
