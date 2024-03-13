<?php
//appelle au paramètre de connexion
include("../connexion.php");
//ouverture d'une session
session_start();
//récupérer la valeur de l'id du patient stocké en session
$id=$_SESSION['patient_id'];

//requête croisé pour aller chercher les caractéristiques du rdv patient et le nom/prenom du medecin
$requete = "SELECT date1, date2, lieu, message, rendezvous.statut ,medecin.nom, medecin.prenom 
FROM rendezvous
JOIN medecin ON rendezvous.medecin_id=medecin.medecin_id
WHERE patient_id = $id 
ORDER BY date1 DESC";
$resultats=$bdd->query($requete); //associer la requête au paramètres de connexion
//echo $requete;
?>

<html>
<head>
<meta charset="UTF-8">

<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-5-base de donn&eacute;es</title>


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
    <nav>
        <a href="new-rdvp.php">Nouveau rendez-vous</a>
    </nav>
</header>

<article>
<?php
// afficher les résultats de la requête dans un objet "données"
while( $donnees = $resultats->fetch(PDO::FETCH_OBJ))
//var_dump($donnees);
  {
    echo '<p class="rdv">';
    echo $donnees->date1.' - date sortie : '.$donnees->date2.'<br />'."\n";
    echo '<span>'.$donnees->lieu.' - commentaire : '.$donnees->message.'</span><br />'."\n";
    //afficher en image le statut
    if($donnees->statut==1) {
      echo '<svg width="16" height="16" fill="green" class="bi bi-check" viewBox="0 0 16 16">';
      echo '<path d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm7.97 4.97a.235.235 0 0 1-.193-.092l-3.5-4.666a.25.25 0 0 1 .386-.322l3.06 4.083 6.28-7.628a.25.25 0 0 1 .4.307l-7 8a.25.25 0 0 1-.393.026z"/>';
      echo '</svg>';
    } 
    elseif ($donnees->statut==2) {
      echo '<svg width="16" height="16" fill="red" class="bi bi-x" viewBox="0 0 16 16">';
      echo '<path d="M3.646 3.646a.5.5 0 0 1 .708 0L8 7.293l4.646-4.647a.5.5 0 0 1 .708.708L8.707 8l4.647 4.646a.5.5 0 0 1-.708.708L8 8.707l-4.647 4.647a.5.5 0 0 1-.708-.708L7.293 8 2.646 3.354a.5.5 0 0 1 0-.708z"/>';
      echo '</svg>';
    } 
    else {
      echo '<svg width="16" height="16" fill="orange" class="bi bi-question" viewBox="0 0 16 16">';
      echo '<path d="M8 14a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0 1a7 7 0 1 0 0-14 7 7 0 0 0 0 14zM8 9a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>';
      echo '</svg>';
    }
    echo '</p>';
  }
$resultats->closeCursor(); //libérer le serveur mysql
?>



</article>
</body>
</html>