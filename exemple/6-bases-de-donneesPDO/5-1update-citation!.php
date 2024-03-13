<?php
$id=$_GET['id']??1;
include("1-connexion.php");

$requete = "SELECT titre, id FROM film ORDER BY titre"  ;
$films = $bdd->query($requete);

$requete2 = "SELECT pseudo, id FROM auteur ORDER BY pseudo"  ;
$auteurs = $bdd->query($requete2);

$requete3 = "SELECT id, texte, film_id, acteur_id
FROM repliques
WHERE id=$id" ;

$citation = $bdd->query($requete3);
	  while($textecit = $citation->fetch(PDO::FETCH_OBJ))
		{
			$citationid=$textecit->id;
			$citationtexte=$textecit->texte;
			$citationfilm=$textecit->film_id;
			$citationacteur=$textecit->acteur_id;
		}
?>

<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<title>PHP-5-base de données</title>
</head>
<body>
<header>
    <div><h1>PHP-5-BDD</h1></div>
    <nav>
        <a href="4-insert-from-form.php">4 insert form</a>
        <a href="5-insert-citation!.php">5 citation form </a>
        <a href="6-traitement-citation.php">6 traitement</a>
    </nav>

</header>
<article>
<form id="form1" name="form1" method="post" action="6-1update-citation.php">
  <p>Film :

    <label for="films"></label>
    <select name="films" id="films">
	  <?php
	  while($donnees = $films->fetch(PDO::FETCH_OBJ))
		{
			$filmid=$donnees->id;
			$filmtitre=$donnees->titre;

			if ($citationfilm==$filmid)
			{$select=" selected=\"selected\"";}
			else {$select="";}

echo'<option value="'.$filmid.'"'.$select.'>'.$filmtitre.'</option>'."\n";			
		}
?>
    </select>
  </p>
  <p>Acteur :<label for="acteurs"></label>
    <select name="acteurs" id="acteurs">
      <?php
	  while($donnees = $auteurs->fetch(PDO::FETCH_OBJ))
		{
		$acteurid=$donnees->id;
		$acteurpseudo=$donnees->pseudo;
		if ($citationacteur==$acteurid)
		{$select=" selected=\"selected\"";}
		else {$select="";}

		echo'<option value="'.$acteurid.'"'.$select.'>'.$acteurpseudo.'</option>'."\n";
		}
?>
    </select></p>
    Citation :
			<textarea name="citation" cols="30" rows="3">
				<?php
				  echo $citationtexte;
				?>
			</textarea>
	<input type="hidden" name="id" value="<?php echo $citationid; ?>">
  <input type="submit" name="button" id="button" value="Envoyer" />
</form>
<a href="supp-citation.php?id=<?php echo $citationid; ?>"
	onClick="if(window.confirm('Vous etes sur de ne pas faire une betise ?'))
	{return true;} else {return false;}">SUPPRIMER </a>
</article>
</body>
</html>

<?php
$films->closeCursor();
$auteurs->closeCursor();
$citation->closeCursor();
?>
