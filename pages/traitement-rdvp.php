<?php

 if( isset( $_POST['date1'] ))
 {//echo ( $_POST['titre'] );
   $date1= date("Y-m-d H:i:s", strtotime( $_POST['date1']));}
 else
 {$date1 ="Date inconnu";}
 //echo $titre;

 if( isset( $_POST['message'] ))
 {
   $message= htmlentities( $_POST['message'], ENT_QUOTES, "utf-8");}
 else
 {$message ="Message inconnu";}

 if( isset( $_POST['patient_id'] ))
 {
   $patient_id= htmlentities( $_POST['patient_id'], ENT_QUOTES, "utf-8");}
 else
 {$patient_id ="Patient inconnu";}

 if( isset( $_POST['medecin_id'] ))
 {
   $medecin_id= htmlentities( $_POST['medecin_id'], ENT_QUOTES, "utf-8");}
 else
 {$medecin_id ="Medecin inconnu";}


 include("../connexion.php");

if($date1!="Date inconnu"){

   $sql = "INSERT INTO rendezvous (date1, message, patient_id, medecin_id)
    VALUES ('$date1', '$message', $patient_id, $medecin_id)";
    echo $sql;
    //die();
    $resultats=$bdd->query($sql);
  header('Location: liste-rdvp.php');
 }
 ?>
