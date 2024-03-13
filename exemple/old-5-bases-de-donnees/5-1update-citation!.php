<?php
$id=4;
include("1-connexion.php");

$sql = "SELECT titre, id FROM film ORDER BY titre"  ;
$films = mysqli_query($bdd, $sql);

$sql2 = "SELECT pseudo, id FROM auteur ORDER BY pseudo"  ;
$auteurs = mysqli_query($bdd, $sql2);

$sql3 = "SELECT id, texte, film_id, acteur_id
FROM repliques
WHERE id=$id" ;

$citation = mysqli_query($bdd, $sql3);
	  while($textecit = mysqli_fetch_assoc($citation))
		{
			$citationid=$textecit['id'];
			$citationtexte=$textecit['texte'];
			$citationfilm=$textecit['film_id'];
			$citationacteur=$textecit['acteur_id'];
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
	  while($donnees = mysqli_fetch_assoc($films))
		{
			$filmid=$donnees['id'];
			$filmtitre=$donnees['titre'];

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
	  while($donnees = mysqli_fetch_assoc($auteurs))
		{
		$acteurid=$donnees['id'];
		$acteurpseudo=$donnees['pseudo'];
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
mysqli_free_result($films);
mysqli_free_result($auteurs);
mysqli_free_result($citation);
?>
