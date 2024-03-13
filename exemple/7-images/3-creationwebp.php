<?php
// Image
$dir = 'img/';
$name = 'glace.jpeg';
$newName = 'glace.webp';

// Create and save
$img = imagecreatefromjpeg($name);
// imagepalettetotruecolor($img);
// imagealphablending($img, true);
// imagesavealpha($img, true);
imagewebp($img, $dir.$newName, 80);
imagedestroy($img);
//print_r (gd_info());
?>
