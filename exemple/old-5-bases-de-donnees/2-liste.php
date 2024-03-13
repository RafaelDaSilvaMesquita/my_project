<?php
require("1-connexion.php");

$sql = "SELECT titre, `date`
         FROM film
          -- WHERE `date`=1981
         ";

/*SELECT titre, `date` AS datesortie
        FROM film
        WHERE `date`>1978
        ORDER BY `date` DESC
        LIMIT 4, 2 */
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
//print_r($donnees);
{
  echo '"'.$donnees['titre'].'" - date sortie : '.$donnees['date'].'<br />'."\n";
}
mysqli_free_result($resultat);
?>
<?php echo "terminé";?>
</article>
</body>
 </html>
