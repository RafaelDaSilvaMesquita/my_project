<?php

const HOST="localhost";
const DBNAME="malicebcrdasilva";
const USER="root";
const PASS="";
const SALT="Mnzo2_3!";
// const HOST="malicebcrdasilva.mysql.db";
// const DBNAME="malicebcrdasilva";
// const USER="malicebcrdasilva";
// const PASS="d8TrcERZCmj4eCj";
// const SALT="Mnzo2_3!";
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
