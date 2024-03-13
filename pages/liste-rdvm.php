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
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-5-base de donn&eacute;es</title>
</head>
<body>
<header>
    <div><h1>Liste rendez-vous</h1></div>
    
</header>
<article>

<?php
// afficher les résultats de la base
while( $donnees = $resultats->fetch(PDO::FETCH_OBJ))
//var_dump($donnees);
  {
    echo '<p>';
    echo $donnees->date1.' - fin du rendez-vous : '.$donnees->date2.'<br />'."\n";
    echo '<a href="donnees_patient.php?id='.$donnees->patient_id.'">'.$donnees->nom.' '.$donnees->prenom.'</a><br />'."\n";
    echo $donnees->lieu.' message : '.$donnees->message.'<a href="modif-rdv.php?id='.$donnees->numero.'">Modifier</a><br />'."\n";
    echo '</p>';
  }
$resultats->closeCursor();
?>
</article>
</body>
 </html>