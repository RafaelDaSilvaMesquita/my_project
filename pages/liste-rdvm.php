<?php
include("../connexion.php");
session_start();
$id=$_SESSION['medecin_id'];
//echo($id);
$requete = "SELECT date1, date2, lieu, message, patient.nom, patient.prenom, patient.patient_id, rendezvous.numero
FROM rendezvous
JOIN patient ON rendezvous.patient_id=patient.patient_id
WHERE medecin_id = $id 
ORDER BY date1 DESC";
$resultats=$bdd->query($requete);
//echo $requete;
?>

<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Rafael Da Silva" />

<link href="style.css" rel="stylesheet" media="all">
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>Liste rendez-vous</title>


<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">
<link href="../style/bootstrap.css" rel="stylesheet">

  <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>

      
      <!-- Custom styles for this template -->
      <link href="../style/stylein.css" rel="stylesheet">


</head>
<body>
<header>
    <h1>Liste rendez-vous</h1>
    
</header>

<article>

<?php
// afficher les résultats de la base
while( $donnees = $resultats->fetch(PDO::FETCH_OBJ))
//var_dump($donnees);
  {
    echo '<p class="rdv">';
    echo $donnees->date1.' - fin du rendez-vous : '.$donnees->date2.'<br />'."\n";
    echo '<a href="donnees_patient.php?id='.$donnees->patient_id.'">'.$donnees->nom.' '.$donnees->prenom.'</a><br />'."\n";
    echo $donnees->lieu.' - message : '.$donnees->message.'<a href="modif-rdv.php?id='.$donnees->numero.'">    Modifier</a><br />'."\n";
    echo '</p> <br />';
  }
$resultats->closeCursor();
?>
</article>
</body>
 </html>