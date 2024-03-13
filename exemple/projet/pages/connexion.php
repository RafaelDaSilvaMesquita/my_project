<?php
define("HOTE",  "localhost");
define("BASE",  "projet");
define("USER",  "root");
define("PASS",  "");
define("SALT",  "pepper");

if($bdd = mysqli_connect(HOTE, USER, PASS, BASE))
{
    mysqli_set_charset($bdd, 'utf8');// Si la connexion a réussi, rien ne se passe.
}
else // Mais si elle rate...
{
    echo 'Erreur'; // On affiche un message d'erreur.
}
