<?php

const HOST="localhost";
const DBNAME="phh";
const USER="root";
const PASS="";
// $hote = "localhost";
// $base = "php";
// $utilisateur = "root";
// $mdp = "";
try {
    if ($bdd = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';
charset=utf8', USER, PASS))
  {}
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
