<?php
define("HOTE", "localhost");
define("BASE", "php2");
define("USER", "root");
define("PASS", "");
// $hote = "localhost";
// $base = "php";
// $utilisateur = "root";
// $mdp = "";
try
{
    if ($bdd = mysqli_connect(HOTE, USER, PASS, BASE))
    {
          mysqli_set_charset($bdd, 'utf8');
    }
    else
    {
        throw new Exception('Unable to connect');
    }
}
catch(Exception $e)
{
    echo $e->getMessage();
}
?>
