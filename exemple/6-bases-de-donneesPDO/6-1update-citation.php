<?php

$film=(int)$_POST['films'] ?? NULL;
$acteur=(int)$_POST['acteurs'] ?? null;
$id=(int)$_POST['id'] ?? null;
$citation =addslashes($_POST['citation'])??null;

include("1-connexion.php");

$requete = "UPDATE repliques SET  texte= '$citation',
film_id= $film, acteur_id= $acteur
WHERE id = $id";
$bdd->query($requete);
//echo $sql;
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
        <a href="5-insert-citation!.php">5 citation form </a>
        <a href="6-traitement-citation.php">6 traitement</a>
        <a href="7-listecroisee.php">7 liste crois&eacute;e</a>
    </nav>

</header>
<article>
<?php
printf ("L'enregistrement a été modifié");
//echo '<br />'.$sql;
//echo '<br />'.$citation;
//echo '<br />'.$film;
//echo '<br />'.$acteur;

?>
<a href="6-2captcha.php">S&eacute;curit&eacute;</a>
</article>
</body>
</html>
