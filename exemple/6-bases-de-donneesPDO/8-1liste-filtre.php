<?php
include("1-connexion.php");
$requete = "SELECT DISTINCT `date` FROM film ORDER BY `date`";
$datedebut = $bdd->query($requete);

while($donnees = $datedebut->fetch(PDO::FETCH_OBJ))
{
    $premiere[] = $donnees->date;
}
print_r($premiere);
$datefiltre=$_POST['filtre']??$premiere[0];

$datefiltre=(int)$datefiltre;
$requetefilms = "SELECT titre, `date` FROM film WHERE `date` >= $datefiltre";
//echo ($sql);
$resultats = $bdd->query($requetefilms);
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
  <form name="recherche" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
    <label for="filtre">Liste de films sortis apr&egrave;s</label>
		<select name="filtre" id="filtre">
      <option value="-1" selected="selected">Choisir</option>
			<?php foreach($premiere as $element)
			  {
			    echo '<option value="'.$element.'" >'.$element.'</option>'."\n";
			  }
				?>
			</select>
    <input type="submit" name="Submit" value="Go">
	</form>
    <br /><br />
<?php

while($donnees = $resultats->fetch(PDO::FETCH_OBJ))
{
    echo $donnees->titre.' | '.$donnees->date.'<br />';
}
$resultats->closeCursor();

?>
</article>
</body>
 </html>
