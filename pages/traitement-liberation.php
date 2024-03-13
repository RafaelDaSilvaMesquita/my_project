<?php
 include("../connexion.php");

 $patient_id=(int)$_GET['id'];
 $requete = "SELECT id
FROM patientmedecin
WHERE patient_id = $patient_id";
$resultats=$bdd->query($requete);
$donnees = $resultats->fetch(PDO::FETCH_OBJ);
$patientmedecin_id=$donnees->id;

//echo $patientmedecin_id;
//die();

//suppresion de la ligne dans la table patientmedecin
$deleteSQL = "DELETE FROM patientmedecin 
WHERE id=$patientmedecin_id";
$bdd->query($deleteSQL);

    $sql2 = "UPDATE patient SET status=0 
    WHERE patient_id=$patient_id";
    $resultats2=$bdd->query($sql2);
    //echo $sql2;
    //die();

   
header('Location: liste-admin.php');
 
 ?>
