<?php
include("../connexion.php");
session_start();
$id=$_SESSION['patient_id'];



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
    <h1>Fiche patient</h1>
    <a href="liste-rdvp.php">Rendez-vous<a>
   

</header>
<article>

<form name="form1" method="post" action="traitement_fichep.php">
   <p><label for="nom">Nom</label>
   <input type="text" name="nom" id="nom" autofocus
    maxlength="120" value="<?php echo $donnees->nom; ?>" readonly/></p>

   <p><label for="prenom">Prenom</label>
   <input type="text" name="prenom" id="prenom" autofocus
    maxlength="120" value="<?php echo $donnees->prenom; ?>" readonly></p>

   <p><label for="date_naissance">Date de naissance</label>
   <input type="date" name="date_naissance" id="date_naissance" autofocus
    value="<?php echo $donnees->date_naissance; ?>" readonly></p>
    
   <p><label for="genre">Genre : </label>
<?php if($donnees->genre==0) {echo 'féminin';} else {echo 'masculin';} ?></p> 

   <p><label for="adresse">Adresse</label>
   <input type="text" name="adresse" id="adresse" autofocus
    maxlength="120" value="<?php echo html_entity_decode($donnees->adresse); ?>"></p>
    
   <p><label for="code_postal">Code postal</label>
   <input type="text" name="code_postal" id="code_postal" autofocus
    maxlength="5" value="<?php echo $donnees->code_postal; ?>"></p>
    
   <p><label for="ville">Ville</label>
   <input type="text" name="ville" id="ville" autofocus
    maxlength="120" value="<?php echo html_entity_decode($donnees->ville); ?>"></p>
    
   <p><label for="numero_telephone">Numero de telephone</label>
   <input type="text" name="numero_telephone" id="numero_telephone" autofocus
    maxlength="15" value="<?php echo $donnees->numero_telephone; ?>"></p>

   <p><label for="email">Email</label>
   <input type="text" name="email" id="email" autofocus
    maxlength="120" value="<?php echo $donnees->email; ?>"></p>

   <p><label for="texte_medecin">Commentaire</label>
   <textarea name="texte_medecin" id="texte_medecin" autofocus
    value="<?php echo html_entity_decode($donnees->texte_medecin); ?>"></textarea></p>
   
   <input type="submit" name="Submit" value="Ok" />

 </form>

</article>
</body>
</html>