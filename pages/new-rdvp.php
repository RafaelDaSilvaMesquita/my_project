<?php
include("../connexion.php");
session_start();
$id=$_SESSION['patient_id'];
$requete = "SELECT patientmedecin.patient_id, patientmedecin.medecin_id, patient.status
FROM patientmedecin
JOIN patient ON patient.patient_id=patientmedecin.patient_id
WHERE patient.patient_id=$id";
$resultats=$bdd->query($requete);
$donnees = $resultats->fetch(PDO::FETCH_OBJ)
?>


<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<meta charset="utf-8">
<title>Selection du rendez-vous</title>
</head>
<body>
<header>
    <div><h1>Nouveau rendez-vous</h1></div>
    <nav>

    </nav>

</header>
<article>

<h3>Choisissez votre date</h3>
 <form name="form1" method="post" action="traitement-rdvp.php">
   <p><label for="titre">Date rendez-vous</label>
   <input type="datetime-local" name="date1" id="date1" required autofocus/></p>
   <p><label for="annee">Message</label>
   <textarea name="message"></textarea>
  </p>
   <input type="submit" name="Submit" value="Ok" />
   <input type="hidden" name="patient_id" value="<?php echo $id;?>" />
   <input type="hidden" name="medecin_id" value="<?php echo $donnees->medecin_id;?>" />

 </form>

</article>

</body>
</html>
