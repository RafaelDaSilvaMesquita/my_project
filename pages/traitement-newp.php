<?php
include("../connexion.php");

if( isset( $_POST['nom'] ))
{
  $nom= htmlentities( $_POST['nom'], ENT_QUOTES, "utf-8");}
else
{$nom ="Nom inconnu";}

if( isset( $_POST['prenom'] ))
{
  $prenom= htmlentities( $_POST['prenom'], ENT_QUOTES, "utf-8");}
else
{$prenom ="Prenom inconnu";}

if( isset( $_POST['date_naissance'] ))
{
  $date_naissance= htmlentities( $_POST['date_naissance'], ENT_QUOTES, "utf-8");}
else
{$date_naissance ="Date de naissance inconnu";}

if( isset( $_POST['genre'] ))
{
  $genre= (int)$_POST['genre'];}

if( isset( $_POST['login'] ))
{
  $login= htmlentities( $_POST['login'], ENT_QUOTES, "utf-8");}
else
{$login ="Login inconnu";}

if( isset( $_POST['password'] ))
{
  $password= htmlentities( $_POST['password'], ENT_QUOTES, "utf-8");
  $password=sha1($password.SALT);}
else
{$password ="Mot de passe inconnu";}
//echo $titre;



if($nom!="Nom inconnu"){

  $sql = "INSERT INTO patient (nom, prenom, date_naissance, genre, login, mdp)
   VALUES ('$nom', '$prenom', '$date_naissance', $genre, '$login', '$password')";
   echo $sql;
   //die();
   $resultats=$bdd->query($sql);
 header('Location: liste-admin.php');
}
?>