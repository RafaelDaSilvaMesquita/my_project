<?php

include("1-connexion.php");

$sql = "SELECT  repliques.texte,  film.titre, auteur.pseudo , auteur.nom
FROM film, repliques, auteur
WHERE
repliques.film_id=film.id
AND
repliques.acteur_id=auteur.id";
$resultat = mysqli_query($bdd, $sql);

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
        <a href="6-traitement-citation.php">6 traitement</a>
        <a href="7-listecroisee.php">7 liste crois&eacute;e</a>
        <a href="../6-images/1-creation.php">&gt; &gt; </a>
    </nav>

</header>
<article>
<?php

while($donnees = mysqli_fetch_assoc($resultat))
{
    echo '"'. $donnees['texte'].' "<strong> '.$donnees['pseudo'].'</strong>
	<em>'.$donnees['titre'].'</em><br /><br />';

}
mysqli_free_result($resultat);

?>
</article>
</body>
</html>
