<?php
$titre=$_POST['titre'] ??"film inconnu";
$titre=addslashes($titre);

$annee=$_POST['annee']??0;
$annee = (int)$annee ;

$id =$_POST['id']??0;
$id=(int)$id;

 include("1-connexion.php");

if($annee!=0 && $titre!="film inconnu" && $id!=0 ){
 $requete = "UPDATE film SET  titre='$titre', `date`= $annee
 WHERE id=$id";

 $bdd->query($requete);
 header('Location: 2-liste2.php');
 }

 ?>
