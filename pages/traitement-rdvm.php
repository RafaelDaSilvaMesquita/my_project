<?php

 if( isset( $_POST['date2'] ))
 {//echo ( $_POST['titre'] );
   $date2= date("Y-m-d H:i:s", strtotime( $_POST['date2']));}
 else
 {$date2 ="Date inconnu";}
 //echo $titre;

 if( isset( $_POST['lieu'] ))
 {
   $lieu= htmlentities( $_POST['lieu'], ENT_QUOTES, "utf-8");}
 else
 {$lieu ="Lieu inconnu";}

 if( isset( $_POST['statut'] ))
 {
   $statut= htmlentities( $_POST['statut'], ENT_QUOTES, "utf-8");}
 else
 {$statut ="Statut inconnu";}

$id=(int)$_POST['id'];

 include("../connexion.php");

if($date2!="Date inconnu"){

   $sql = "UPDATE rendezvous SET date2='$date2', lieu='$lieu', statut='$statut' 
    WHERE numero=$id";
    echo $sql;
    //die();
    $resultats=$bdd->query($sql);
  header('Location: liste-rdvm.php');
 }
 ?>
