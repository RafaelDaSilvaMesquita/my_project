<?php
session_start();
$id=$_SESSION['patient_id'];



if( isset( $_POST['texte_medecin2'] ))
{
  $texte_medecin2= htmlentities( $_POST['texte_medecin2'], ENT_QUOTES, "utf-8");}
else
{$texte_medecin2 ="Commentaire inconnu";}
//echo $titre;


include("../connexion.php");

if($nom!="Nom inconnu"){

  $sql = "UPDATE patient SET  texte_medecin2='$texte_medecin2'
  WHERE patient_id=$id";
  
   echo $sql;
   //die();
   $resultats=$bdd->query($sql);
 header('Location: liste-rdvm.php');
}
?>