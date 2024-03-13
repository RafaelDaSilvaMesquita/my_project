<?php
header ("Content-type: image/png");
include("../connexion.php");
$annee=$_GET['annee']??2010;
$annee=(int)$annee;

$largeur = 260;
$hauteur = 200;
$image = imagecreate($largeur,$hauteur);
$fond = imagecolorallocate($image,207,207,207);
imagecolortransparent($image, $fond);
$rouge = imagecolorallocate($image,255,0,0);
$font = realpath('adam.ttf');
//$font = 'adam.ttf';

// image type
$sql = "SELECT coul, valeur, legende
FROM resultats
WHERE quinte_annee=$annee
ORDER BY ordre ";
$results = $bdd->query($sql);
$i=20;

while($barre = $results->fetch(PDO::FETCH_OBJ))
{
  $couleur=$barre->coul;
  //255,23,30
  $decompo = explode(",",$couleur);
  //${"coul".$j}  = imagecolorallocate($image,mt_rand (0,254),mt_rand (0,254),mt_rand (0,254));
  $couldehist = imagecolorallocate($image,$decompo[0],$decompo[1],$decompo[2]);

  $coultext = imagecolorallocate($image,255-$decompo[0],255-$decompo[1],255-$decompo[2]);

  imagefilledrectangle($image,$i,(int)($hauteur-$barre->valeur),$i+60,190,$couldehist);
  imagettftext($image, 8, 90, $i+35, 185, $coultext, $font, $barre->legende);
  imagettftext($image, 6, 0, $i+20, 198, $rouge, $font, $barre->valeur." €");

  $i=$i+70;
}
$results->closeCursor();
// Fabrication de l'image
imagepng($image);
imagedestroy($image);
?>
