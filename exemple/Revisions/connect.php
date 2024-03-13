<?php
$hote = "localhost";
$base = "phh";
$utilisateur = "root";
$mdp = "";

if($bdd = mysqli_connect($hote, $utilisateur, $mdp, $base))
{
    mysqli_set_charset($bdd, 'utf8');
}
else // Mais si elle rate
{
    echo 'Erreur'; // On affiche un message d'erreur.
}
?>
