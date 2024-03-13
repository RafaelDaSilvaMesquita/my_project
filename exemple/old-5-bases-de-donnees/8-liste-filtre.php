<?php
include("1-connexion.php");
$sql2 = "SELECT `date` FROM film ORDER BY `date` LIMIT 0,1 ";
$datedebut = mysqli_query($bdd, $sql2);

while($donnees = mysqli_fetch_assoc($datedebut))
{
    $premiere = $donnees['date'];
}

 $premiere=(int)$premiere -1 ;

if (isset($_POST['filtre']) && ($_POST['filtre']!=''))
	{
	$datefiltre=(int)$_POST['filtre'];
	}
$sql = "SELECT titre, `date` FROM film WHERE `date` > $premiere";
$resultat = mysqli_query($bdd, $sql);
?>
<html>
<head>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
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
  <form name="recherche" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="filtre">Liste de films sortis apr&egrave;s</label>
    <input type="number" name="filtre" id="filtre"  max="<?php 	echo $oy=date('Y'); ?>" min="<?php 	echo $premiere; ?> " />
    <input type="submit" name="Submit" value="Ok">
	</form>
    <br /><br />
<?php

while($donnees = mysqli_fetch_assoc($resultat))
{
    echo $donnees['titre'].' '.$donnees['date'].'<br />';
}
mysqli_free_result($resultat);

?>
</article>
</body>
 </html>
