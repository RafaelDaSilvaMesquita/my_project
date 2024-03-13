<?php
$id=$_GET['id']??5;
$id=(int)$id;


	if ($id< 100){
	  include("1-connexion.php");

	  $requete = "SELECT titre, `date`, id
						FROM film
						WHERE id =$id";
	  //echo $sql;
	  $resultats=$bdd->query($requete);

	  $donnees[] = $resultats->fetch(PDO::FETCH_BOTH);
	   var_dump($donnees);

	   $titre= $donnees[0][0];
	   $datesortie= $donnees[0][1];
	   $idfilm= $donnees[0][2];
	   //echo $titre;
	}
  ?>
<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<title>PHP-2-post</title>
</head>
<body>
<header>
    <div><h1>PHP-2-BDD</h1></div>
    <nav>
    </nav>
</header>
<article>

<h3>Formulaire simple</h3>
 <form name="form1" method="post" action="6-update-film.php">
   <p><label for="titre">Titre</label>
   <input type="text" name="titre" id="titre"  autofocus
   maxlength="120" value="<?php echo $titre; ?>"/>
 </p>
   <p><label for="annee">Ann&eacute;e sortie</label>
   <input type="number" name="annee" id="annee"  max="<?php echo Date("Y"); ?>" min="1900"
   value="<?php echo $datesortie; ?>" readonly />
 </p>
   <input type="hidden" name="id" id="id" value="<?php echo $idfilm; ?>" />
   <input type="submit" name="Submit" value="Ok">

 </form>

</article>

</body>
</html>
