<?php
header ("Content-type: image/png");
$image = imagecreate(200,50);
imagecolorallocate($image, 255, 128, 0);
//$bleu = imagecolorallocate($image, 0, 0, 255);
//$bleuclair = imagecolorallocate($image, 156, 227, 254);
//$noir = imagecolorallocate($image, 0, 0, 0);
$blanc = imagecolorallocate($image, 255, 255, 255);
$texte="Salut à vous";
$texte = utf8_decode($texte);
imagestring($image, 4, 35, 15, $texte, $blanc);
imagepng($image);
?>
