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
        <a href="1-connexion.php">1 connexion</a>
        <a href="2-liste.php">2 liste </a>
        <a href="3-insert.php">3 insert</a>
    </nav>
</header>
<article>

<h3>Soft reset</h3>
 <form name="form1" method="post" action="6-ttx-suppsoft-film.php">
   <input type="hidden" name="id" id="id" value="<?php echo $idfilm; ?>" />
   <input type="submit" name="Submit" value="Confirmer la Supp">
 </form>

</article>

</body>
</html>
