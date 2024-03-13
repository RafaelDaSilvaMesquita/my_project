<?php
// on spécifie le type de document que l'on va créer (ici une image au format PNG
header ("Content-type: image/png");

$ratio = $_GET['ratio']??1;
$vert = $_GET['vert']??0;
//echo 'toto';
// on dessine une image vide de 200 pixels sur 100
$image = ImageCreate(200*$ratio, 100*$ratio) or die ("Erreur lors de la création de l'image");
//echo (200*$ratio);
// on applique à cette image une couleur de fond, les couleurs étant au format RVB, on aura donc ici une couleur rouge
$couleur_fond = ImageColorAllocate($image, 255, $vert, 0);

// on dessine notre image PNG
ImagePng ($image);
?>
