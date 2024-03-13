<?php
 include("../connexion.php");

 $patient_id=(int)$_GET['id']; //récupérer la valeur de la variable qui est danss l'url, et on la force à être un nombre entier 
                               //on ne supprime pas le patient, on change uniquement la valeur de son status
 $requete = "UPDATE patient SET  status=3 
 WHERE patient_id=$patient_id";
$resultats=$bdd->query($requete);
//echo $patientmedecin_id;
//die();

   
header('Location: liste-admin.php');
 
 ?>
