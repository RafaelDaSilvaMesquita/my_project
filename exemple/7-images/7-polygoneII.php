<?php
header ("Content-type: image/png");
$largeur = 190;
$hauteur = 200;
$image = imagecreate($largeur,$hauteur);
//$font = 'runa.ttf';
$font = realpath('runa.ttf');
// Allocation des couleurs
$gris = imagecolorallocate($image,207,207,207);
$noir = imagecolorallocate($image,0,0,0);
$gris2 = imagecolorallocate($image,99,99,99);
$gris3 = imagecolorallocate($image,43,43,43);
$blanc = imagecolorallocate($image,255,255,255);
$rouge = imagecolorallocate($image,255,0,0);
// Ajout d'un rectangle sur l'image
imagefilledrectangle($image,20,30,50,190,$noir);
imagefilledrectangle($image,60,140,90,190,$gris2);
imagefilledrectangle($image,100,70,130,190,$gris3);
imagefilledrectangle($image,140,90,170,190,$blanc);
// Ajout d'un texte sur l'image
//imagestringup($image,3,28,85, 'Janvier',$rouge);
$decalage=22;
imagettftext($image, 15, 90, 20+$decalage, 115, $rouge, $font, "Janvier");
imagettftext($image, 15, 90, 82, 155, $rouge, $font,'Février');
imagettftext($image, 15, 90, 122,105, $rouge, $font, 'Mars');
imagettftext($image, 15, 90, 162, 135, $rouge, $font, 'Avril');

// Fabrication de l'image
imagepng($image);
imagedestroy($image);
?>
