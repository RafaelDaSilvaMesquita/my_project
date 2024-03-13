<?php

const HOST="localhost";
const DBNAME="exobase";
const USER="root";
const PASS="";
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

