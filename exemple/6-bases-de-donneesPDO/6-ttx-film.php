<?php

 if( isset( $_POST['titre'] ))
 {//echo ( $_POST['titre'] );
   $titre= htmlentities( $_POST['titre'], ENT_QUOTES, "utf-8");}
 else
 {$titre ="film inconnu";}
 //echo $titre;

 if( isset( $_POST['annee'])&&( $_POST['annee']<date("Y")+1) )
 {$annee = (int)$_POST['annee'];}
 else
 {$annee =0;}

 include("1-connexion.php");

if($annee!=0 && $titre!="film inconnu"){

   $sql = "INSERT INTO film (titre, `date`)
    VALUES ('$titre', $annee)";
    echo $sql;
    //die();
    $resultats=$bdd->query($sql);
  header('Location: 2-liste.php');
 }
 ?>
