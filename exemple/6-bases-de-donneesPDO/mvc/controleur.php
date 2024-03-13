<?php

// On demande les 2 derniers films (modèle)
include_once('modele.php');
$films = get_films(0, 5);
// print_r($films);
// die();
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($films as $cle => $film)
{
    $films[$cle]['id'] = (int)$film['id'];
    $films[$cle]['datesortie'] = (int)$film['date_sortie'];
    $films[$cle]['titre'] = nl2br(htmlspecialchars($film['titre']));
    // nl2br retour à la ligne
}

// On affiche la page (vue)
include_once('vue.php');
