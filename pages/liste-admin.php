<?php
include("../connexion.php");

$requete = "SELECT nom, prenom, status, patient_id
FROM patient
WHERE status<3
ORDER BY nom ASC";
$resultats=$bdd->query($requete);

$requete2 = "SELECT nom, prenom, medecin_id
FROM medecin
ORDER BY nom ASC";
$resultats2=$bdd->query($requete2);
?>

<html>
<head>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>Configuration</title>
</head>
<body>
<header>
    <div><h1>Configuration</h1></div>
    
</header>
<article>

<div><h1>Liste des patients</h1></div>

<?php
// afficher les résultats de la base
while( $donnees = $resultats->fetch(PDO::FETCH_OBJ))
//var_dump($donnees);
  {  $dispo=$dispo='<a href="traitement-liberation.php?id='.$donnees->patient_id.'">changement de médecin</a>';
    if($donnees->status==0){$dispo='<a href="affectation.php?id='.$donnees->patient_id.'">Affecté à un médecin</a>';}
    echo '<p>';
    echo $donnees->nom.' '.$donnees->prenom.' '.$dispo.' <a href="softdelete.php?id='.$donnees->patient_id.'">Masqué patient</a><br />'."\n";
    echo '</p>';
  }
$resultats->closeCursor();
?>
<a href="creation-newp.php">Nouveau patient</a>
    
<div><h1>Liste des médecins</h1></div>
    
<?php
// afficher les résultats de la base
while( $donnees = $resultats2->fetch(PDO::FETCH_OBJ))
//var_dump($donnees);
  {
    echo '<p>';
    echo $donnees->nom.' '.$donnees->prenom.'<br />'."\n";
    echo '</p>';
  }
$resultats->closeCursor();
?>
<a href="creation-newm.php">Nouveau médecin</a>

</article>
</body>
 </html>