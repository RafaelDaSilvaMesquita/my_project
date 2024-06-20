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
<meta name="author" content="Rafael Da Silva" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
crossorigin="anonymous">

<link href="style.css" rel="stylesheet" type="text/css" media="all">
<link rel="icon" type="image/svg+xml" href="php.svg">

<title>Prise de rendez-vous</title>
</head>
<body class="bg-light">
  <div class="container">
    <div class="py-5 text-center">

      <h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4-week" viewBox="0 0 16 16">
          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
          <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
        </svg>
        Nouveau rendez-vous
      <h2>
    </div>
  </div>

  <div class="container">
    <h4 class="mb-3">Choisissez votre date</h4>
    <form name="form1" method="post" action="traitement-rdvp.php">
      <div class="row g-3">
        <div class="col-sm-2">
          <label for="date" class="form-label">Date du rendez-vous</label>
          <input type="datetime-local" name="date1" id="date1" class="form-control"
          required autofocus/>
        </div>

        <div class="row g-3">
          <div class="col-sm-4">
            <label for="message_medecin" class="form-label">Message</label>
            <textarea name="message" class="form-control" 
            autofocus></textarea>
          </div>
        </div>
        
        <div class="col-1">
          <input type="submit" name="Submit" value="Ok" 
          class="btn btn-primary btn-lg btn-block"/>
        </div>
        <input type="hidden" name="patient_id" value="<?php echo $id;?>" />
        <input type="hidden" name="medecin_id" value="<?php echo $donnees->medecin_id;?>" />

      </div>
    </form>
  </div>


<!--<header>
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
   <input type="hidden" name="patient_id" value="<//?php echo $id;?>" />
   <input type="hidden" name="medecin_id" value="<//?php echo $donnees->medecin_id;?>" />

 </form>

</article>-->

</body>
</html>
