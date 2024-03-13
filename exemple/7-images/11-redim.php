<?php
$source = imagecreatefromjpeg("img/play.jpg");
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$destination = imagecreatetruecolor($largeur_source/2, $hauteur_source/2);
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);
// On crée la miniature
imagecopyresampled($destination, $source, 0, 0, 0, 0,
$largeur_destination, $hauteur_destination,
$largeur_source,$hauteur_source);

imagewebp($destination, "img/vign/demi_grande.webp", 70);
?>
