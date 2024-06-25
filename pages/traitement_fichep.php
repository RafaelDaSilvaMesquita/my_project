<?php
session_start();
$id=$_SESSION['patient_id'];


if( isset( $_POST['adresse'] ))
{
  $adresse= htmlentities( $_POST['adresse'], ENT_QUOTES, "utf-8");}
else
{$adresse ="Adresse inconnu";}

if( isset( $_POST['code_postal'] ))
{
  $code_postal= htmlentities( $_POST['code_postal'], ENT_QUOTES, "utf-8");}
else
{$code_postal ="Code postal inconnu";}

if( isset( $_POST['ville'] ))
{
  $ville= htmlentities( $_POST['ville'], ENT_QUOTES, "utf-8");}
else
{$ville ="Ville inconnu";}

if( isset( $_POST['numero_telephone'] ))
{
  $numero_telephone= htmlentities( $_POST['numero_telephone'], ENT_QUOTES, "utf-8");}
else
{$numero_telephone ="Numéro de telephone inconnu";}

if( isset( $_POST['email'] ))
{
  $email= htmlentities( $_POST['email'], ENT_QUOTES, "utf-8");}
else
{$email ="Email inconnu";}

if( isset( $_POST['texte_medecin'] ))
{
  $texte_medecin= htmlentities( $_POST['texte_medecin'], ENT_QUOTES, "utf-8");}
else
{$texte_medecin ="Commentaire inconnu";}
//echo $titre;


include("../connexion.php");


// Validation de l'email
if ($email != "Email inconnu" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $_SESSION['error_message'] = "Adresse e-mail invalide.";
  header('Location: fiche_patient.php');
  exit();
}


if($email!="Email inconnu"){

  $sql = "UPDATE patient SET  adresse='$adresse', code_postal='$code_postal', ville='$ville', numero_telephone='$numero_telephone', email='$email', texte_medecin='$texte_medecin'
  WHERE patient_id=$id"; //mise à jour par le patient des éléments dans la table patient
   //echo $sql;
   //die();
   $resultats=$bdd->query($sql); //pour éxécuter la requête
 header('Location: fiche_patient.php'); //redirection vers la fiche patient
}
?>