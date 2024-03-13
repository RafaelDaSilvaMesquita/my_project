<?php
include '../connexion.php';
$id=$_GET['id']??1;
$id=(int)$id;

$requete = "SELECT nom, prenom, patient_id
FROM patient
WHERE patient_id=$id";
$resultats=$bdd->query($requete);

$requete2 = "SELECT nom, prenom, medecin_id
FROM medecin
ORDER BY nom ASC";
$resultats2=$bdd->query($requete2);

$donnees = $resultats->fetch(PDO::FETCH_OBJ);
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
    <div><h1>Liste des patients</h1></div>
    
</header>
<article>
    <p>Pour le patient : <?php echo $donnees->nom.' '. $donnees->prenom;?></p>
    <p>Choisir quel médecin lui affecté : </p>
    <form method="POST" action="traitement-affectation.php">
    <select name="medecin_id">
        <option value="0" selected=selected>Choisir</option>
        <?php while( $donnees2 = $resultats2->fetch(PDO::FETCH_OBJ))
//var_dump($donnees);
  {
    echo '<option value="'.$donnees2->medecin_id.'">'.$donnees2->nom.' '.$donnees2->prenom.'</option>'."\n";
  } ?>
    </select><br /><br />
    <input type="submit" value="Envoyer"/>
    <input name="patient_id" type="hidden" value="<?php echo $id;?>"/>
</form>
</article>
</html>