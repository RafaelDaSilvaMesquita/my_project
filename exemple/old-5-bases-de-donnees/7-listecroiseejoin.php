<?php

include("1-connexion.php");

$sql = "SELECT repliques.texte, film.titre AS titrefilm,
auteur.pseudo, auteur.nom
FROM repliques
inner join film on film.id = repliques.film_id
inner join auteur on auteur.id = repliques.acteur_id";
$resultat = mysqli_query($bdd, $sql);

?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<title>PHP-5-base de données</title>
<style rel="stylesheet" >
  p span{
    font-style: italic;
  }
</style>
</head>
<body>
<header>
    <div><h1>PHP-5-BDD</h1></div>
    <nav>
        <a href="6-traitement-citation.php">6 traitement</a>
        <a href="7-listecroisee.php">7 liste crois&eacute;e</a>
        <a href="../6-fichiers-data/1-xml.php">&gt; &gt; </a>
    </nav>

</header>
<article>
<?php

while($donnees = mysqli_fetch_assoc($resultat))
{
  echo '<p>"'. $donnees['texte'].' "<strong> '
  .$donnees['pseudo'].' | '.$donnees['nom'].' </strong>
	<span> '.$donnees['titrefilm'].'</span><br /><br /></p>';

}
mysqli_free_result($resultat);

?>
</article>
</body>
</html>
