<?php
const HOST="localhost";
const DBNAME="projet";
const USER="root";
const PASS="";
const SALT="pepper";

$bdd = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';
charset=utf8', USER, PASS);
