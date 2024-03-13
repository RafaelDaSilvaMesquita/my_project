<?php
include("1-connexion.php");

$sql = "SELECT titre, `date`, id FROM film";
//echo $sql;
$resultat = mysqli_query($bdd, $sql);
?>
<html>
<head>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-5-base de donn&eacute;es</title>
</head>
<body>
<header>
    <div><h1>PHP-5-BDD</h1></div>
    <nav>
        <a href="1-connexion.php">1 connexion</a>
        <a href="2-liste.php">2 liste </a>
        <a href="3-insert.php">3 insert</a>
    </nav>

</header>
<article>

<?php

while($donnees = mysqli_fetch_assoc($resultat))
{
  echo $donnees['titre'].' '.$donnees['date'].'
  <a href="6-modif-film.php?id='.$donnees['id'].'">
  Modif</a><br />'."\n";
}
mysqli_free_result($resultat);

?>
</article>
</body>
 </html>
