<?php

//tranfo image sw.jpeg
//enregistrer dans img avec le nom sw2.webp en webp et 800px de large
$source = imagecreatefromjpeg("img/sw.jpg");
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$destination = imagecreatetruecolor(800, round($hauteur_source*(800/$largeur_source),2));
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);
// On crée la miniature
imagecopyresampled($destination, $source, 0, 0, 0, 0,
$largeur_destination, $hauteur_destination,
$largeur_source,$hauteur_source);

imagewebp($destination, "img/sw2.webp", 80);
imagejpeg($destination, "img/sw2.jpeg", 80);
?>
