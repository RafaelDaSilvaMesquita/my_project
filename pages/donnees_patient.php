<?php
include("../connexion.php");
session_start();
$id=$_GET['id'];



$requete = "SELECT * FROM patient
WHERE patient_id = $id";
$resultats=$bdd->query($requete);
// echo $requete;
$donnees = $resultats->fetch(PDO::FETCH_OBJ)
?>

<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<title>PHP-5-base de données</title>
</head>
<body>
<header>
    <h1>Information sur le patient</h1>
    <h1></h1>
    <a href="liste-rdvm.php">Retour sur les rendez-vous<a>
   

</header>
<article>

<form name="form1" method="post" action="traitement_fichem.php">
    
   <p><label for="nom">Nom : </label>
   <?php echo $donnees->nom; ?></p>

   <p><label for="prenom">Prenom : </label>
   <?php echo $donnees->prenom; ?></p>

   <p><label for="date_naissance">Date de naissance : </label>
   <?php echo $donnees->date_naissance; ?></p>
    
   <p><label for="genre">Genre : </label>
   <?php echo $donnees->genre; ?></p> 

   <p><label for="adresse">Adresse : </label>
   <?php echo html_entity_decode($donnees->adresse); ?></p>
    
   <p><label for="code_postal">Code postal : </label>
   <?php echo $donnees->code_postal; ?></p>
    
   <p><label for="ville">Ville : </label>
   <?php echo html_entity_decode($donnees->ville); ?></p>
    
   <p><label for="numero_telephone">Numero de telephone : </label>
   <?php echo $donnees->numero_telephone; ?></p>

   <p><label for="email">Email : </label>
   <?php echo $donnees->email; ?></p>

   <p><label for="texte_medecin">Commentaire : </label>
   <?php echo html_entity_decode($donnees->texte_medecin); ?></p>

   <p><label for="texte_medecin2">Mon commentaire</label>
   <textarea name="texte_medecin2" id="texte_medecin2" autofocus
    value="<?php echo html_entity_decode($donnees->texte_medecin2); ?>"></textarea></p>
   
   <input type="submit" name="Submit" value="Ok" />

 </form>
<a href="6-2captcha.php">S&eacute;curit&eacute;</a>
</article>
</body>
</html>