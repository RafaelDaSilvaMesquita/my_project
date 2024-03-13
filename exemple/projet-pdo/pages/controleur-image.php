<?php

// On demande les  resultats (modèle)
$annee=$_GET['annee']??2010;
$annee= (int)$annee;

require('modele-image.php');
$resultats = get_histos($annee);
//var_dump($resultats);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($resultats as $cle => $resultat)
{
  $resultats[$cle]['coul']=strip_tags($resultat['coul']);
  $resultats[$cle]['valeur'] = (float)$resultat['valeur'];
  $resultats[$cle]['legende'] = nl2br(htmlspecialchars($resultat['legende']));
    // nl2br retour à la ligne
  return $resultats;
}
