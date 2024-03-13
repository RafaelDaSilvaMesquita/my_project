<?php

$id =$_POST['id']??0;
$id=(int)$id;

 include("1-connexion.php");

if( $id!=0 ){
 $requete = "UPDATE film SET  softdelete=CAST(NOW() AS DATE)
 WHERE id=$id";

 $bdd->query($requete);
 header('Location: 2-liste3.php');
 }

 ?>
