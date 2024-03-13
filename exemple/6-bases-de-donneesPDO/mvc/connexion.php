<?php
define("HOTE", "localhost");
define("BASE", "phh");
define("USER", "root");
define("PASS", "");
$bdd = new PDO('mysql:host='.HOTE.';dbname='.BASE.';
charset=utf8', USER, PASS);
