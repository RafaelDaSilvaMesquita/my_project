<?php

// On demande les  resultats (modèle)
 include_once('modele.php');
// $resultats = get_resultats();

// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($resultats as $cle => $resultat)
{
  //annee, descript, lien
    $resultats[$cle]['annee'] = (int)($resultat['annee']);
    $resultats[$cle]['descript'] = nl2br(htmlspecialchars($resultat['descript']));
    $url=$resultat['lien'];
    if (filter_var($url, FILTER_VALIDATE_URL)) {
          $resultats[$cle]['lien'] = $url;
        }
    // nl2br retour à la ligne
}
