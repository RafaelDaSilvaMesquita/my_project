<?php
include("1-connexion.php");
$sql2 = "SELECT DISTINCT `date` FROM film ORDER BY `date`";
$datedebut = mysqli_query($bdd, $sql2);

while($donnees = mysqli_fetch_assoc($datedebut))
{
    $premiere[] = $donnees['date'];
}
//print_r($premiere);
$datefiltre=$_POST['filtre']??$premiere[0];

$datefiltre=(int)$datefiltre;
$sql = "SELECT titre, `date` FROM film WHERE `date` >= $datefiltre";
//echo ($sql);
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

while($donnees = mysqli_fetch_assoc($resultat))
{
    echo $donnees['titre'].' | '.$donnees['date'].'<br />';
}
mysqli_free_result($resultat);

?>
</article>
</body>
 </html>
