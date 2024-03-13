<?php

 if( isset( $_POST['medecin_id'] )&& $_POST['medecin_id']!=0)
 {//echo ( $_POST['titre'] );
   $medecin_id= $_POST['medecin_id'];}

   $patient_id=(int) $_POST['patient_id'];
 
 include("../connexion.php");

if($_POST['medecin_id']!=0){

   $sql = "INSERT INTO patientmedecin (patient_id, medecin_id)
    VALUES ($patient_id, $medecin_id)";
     $resultats=$bdd->query($sql);
     //echo $sql;

    $sql2 = "UPDATE patient SET status=1 
    WHERE patient_id=$patient_id";
    $resultats2=$bdd->query($sql2);
    //echo $sql2;
    //die();

   
  header('Location: liste-admin.php');
 }
 ?>
