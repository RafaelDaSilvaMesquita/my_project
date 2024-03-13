<?php
define("HOST", "localhost");
define("LOGIN", "root");
define("PWD", "");
define("DBNAME", "projet");
define("SALT", "pepper");

$bdd = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';
charset=utf8', LOGIN, PWD);
