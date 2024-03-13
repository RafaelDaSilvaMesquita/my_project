<?php
header ("Content-type: image/png");
putenv('GDFONTPATH=' . realpath('.'));
$image = imagecreate(500,300);
imagecolorallocate($image, 255, 128, 0);
//$bleu = imagecolorallocate($image, 0, 0, 255);
//$bleuclair = imagecolorallocate($image, 156, 227, 254);
//$noir = imagecolorallocate($image, 0, 0, 0);
$blanc = imagecolorallocate($image, 255, 255, 255);
$font=('RBNo2.ttf');
//$font = realpath('Draft.ttf');
//$font = 'Carre';
$texte = "Salut à vous";
imagettftext($image, 90, 20, 62, 270, $blanc, $font, $texte);
                    //taille, angle, x, y coul, font, texte
imagepng($image);
?>
