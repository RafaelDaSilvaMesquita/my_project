<?php
	//php 7
	$film=$_POST['films'] ?? -1;
	$film=(int)$film;
	// php 5.6
if( isset( $_POST['acteurs'] ) && ($_POST['acteurs']!=-1))
	{$acteur = (int)$_POST['acteurs'];}
else
	{$acteur =-1;}


if( isset( $_POST['citation'] ) )
	{$citation = $_POST['citation'];
//	echo $citation."1<br />";
	$citation=htmlentities($citation, ENT_QUOTES, "utf-8");
//	echo $citation."2<br />";
	$citation = addslashes($citation);
	//echo $citation."3<br />";
	}
else
	$citation =null;
include("1-connexion.php");

$requete = "INSERT INTO repliques
	(texte, film_id, acteur_id)
	VALUES ('$citation', $film, $acteur)";

$cas1="$film !=-1 && $acteur !=-1";
$cas2="$film ==-1 && $acteur !=-1";

if(eval($cas1))
	{$bdd->query($requete);}

 $last=$bdd->lastInsertId();
?>

<html>
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<title>PHP-5-base de données</title>
</head>
<body>
<header>
    <div><h1>PHP-5-BDD</h1></div>
    <nav>
        <a href="5-insert-citation!.php">5 citation form </a>
        <a href="6-traitement-citation.php">6 traitement</a>
        <a href="7-listecroisee.php">7 liste crois&eacute;e</a>
    </nav>

</header>
<article>
<?php
printf ("Le nouvel enregistrement a été ajouté");
echo '<br />'.$requete;
echo '<br />'.$citation;
//echo '<br />'.$film;
//echo '<br />'.$acteur;

?>
</article>
</body>
</html>
