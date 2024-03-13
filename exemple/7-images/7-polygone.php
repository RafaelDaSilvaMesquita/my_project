<?php
$largeur = 190;
$hauteur = 200;
$image = imagecreate($largeur,$hauteur);
// Allocation des couleurs
$gris = imagecolorallocate($image,207,207,207);
$noir = imagecolorallocatealpha($image, 0, 0, 0, 75);
$gris2 = imagecolorallocate($image,99,99,99);
$gris3 = imagecolorallocate($image,43,43,43);
$blanc = imagecolorallocate($image,255,255,255);
// Ajout d'un rectangle sur l'image

imagefilledrectangle($image,20,30,50,190,$noir);
imagefilledrectangle($image,60,140,90,190,$gris2);
imagefilledrectangle($image,100,70,130,190,$gris3);
imagefilledrectangle($image,140,90,170,190,$blanc);
header ("Content-type: image/png");
// Fabrication de l'image
imagepng($image);
imagedestroy($image);
?>
