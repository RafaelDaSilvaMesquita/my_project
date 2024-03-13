<?php
header ("Content-type: image/png");

$largeur = 260;
$hauteur = 200;
$image = imagecreate($largeur,$hauteur);
$fond = imagecolorallocate($image,207,207,207);
imagecolortransparent($image, $fond);
$rouge = imagecolorallocate($image,255,0,0);
//$font = 'adam.ttf';
$font = realpath('adam.ttf');
include('controleur-image.php');
// image type
$i=20;
//$j=1;
//print_r($resultats);
foreach(  $resultats as  $resultat)
{
//if($resultat['annee']
//${"coul".$j}  = imagecolorallocate($image,mt_rand (0,254),mt_rand (0,254),mt_rand (0,254));
$decompo = explode(",",$resultat['coul']);
//print_r($decompo);
//compatible php8.1
$resultinv=Floor(($hauteur-$resultat['valeur']));
//echo $resultinv;
$couldeci = imagecolorallocate($image,$decompo[0],$decompo[1],$decompo[2]);
$coultext = imagecolorallocate($image,255-$decompo[0],255-$decompo[1],255-$decompo[2]);
imagefilledrectangle($image,$i,$resultinv,$i+60,190,$couldeci);
imagettftext($image, 8, 90, $i+35, 185, $coultext, $font, $resultat['legende']);
imagettftext($image, 6, 0, $i+20, 198, $rouge, $font, $resultat['valeur']." €");

$i=$i+70;
//$j++;
}

// Fabrication de l'image
imagepng($image);
imagedestroy($image);
?>
