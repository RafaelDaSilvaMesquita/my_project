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

if( isset( $_POST['domaine'] ))
{
  $domaine= htmlentities( $_POST['domaine'], ENT_QUOTES, "utf-8");}
else
{$domaine ="Domaine inconnu";}

if( isset( $_POST['numero_telephone'] ))
{
  $numero_telephone= htmlentities( $_POST['numero_telephone'], ENT_QUOTES, "utf-8");}
else
{$numero_telephone ="Numéro de téléphone inconnu";}

if( isset( $_POST['email'] ))
{
  $email= htmlentities( $_POST['email'], ENT_QUOTES, "utf-8");}
else
{$email ="Email inconnu";}
//echo $titre;



if($nom!="Nom inconnu"){

  $sql = "INSERT INTO medecin (nom, prenom, login, mdp, domaine, numero_telephone, email)
   VALUES ('$nom', '$prenom', '$login', '$password', '$domaine', '$numero_telephone', '$email')";
   echo $sql;
   //die();
   $resultats=$bdd->query($sql);
 header('Location: liste-admin.php');
}
?>