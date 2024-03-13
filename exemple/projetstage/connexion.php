<?php

$hote = "localhost";
$base = "projet";
$utilisateur = "root";
$mdp = "";

if($bdd = mysqli_connect($hote, $utilisateur, '', $base))
{
    // Si la connexion a r�ussi, rien ne se passe.
}
else // Mais si elle rate�
{
    echo 'Erreur'; // On affiche un message d'erreur.
}
