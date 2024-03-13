<?php
// on dessine une image vide de 200 pixels sur 100
$image = @ImageCreate (200, 100)
or die ("Erreur lors de la création de l'image");

// on applique à cette image une couleur de fond,
//les couleurs étant au format RVB
ImageColorAllocate ($image, 255, 55, 100);

// on dessine notre image PNG et on l'enregistre
ImagePng ($image, "img/nelleimage.png", 9);
imagedestroy($image);
?>
