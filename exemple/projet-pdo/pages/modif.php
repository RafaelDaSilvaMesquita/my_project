<?php
require_once("session.php");
include("connexion.php");

$sql = "SELECT id, quinte_annee, valeur, legende, coul
        FROM  resultats ORDER BY quinte_annee";
$resultat = mysqli_query($bdd, $sql);

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="UTF-8" />
    <title>projet php modif</title>
    <style rel="stylesheet">
      .liste{
        font-family:courier;}

    </style>
	</head>
<body>
<?php

while($donnees = mysqli_fetch_assoc($resultat))
{
$id=$donnees['id'];
$coul=$donnees['coul'];
$legend=str_pad($donnees['legende'], 10, "_");
$valeur=str_pad($donnees['valeur'], 7, "-");

  echo '<p class="liste">'.$donnees['quinte_annee'].' | '.$legend.' | '.$valeur.'
	<a href="detail-modif.php?id='.$id.'
  " style="background-color:rgb('.$coul.');text-shadow:1px 1px 1px white;">Modifier</a></p>'."\n";
// <a href="detail_modif.php?id=1" style="background-color:rgb(255,25,66)">Modifier</a>"
}
mysqli_free_result($resultat);

?>
</body>
</html>
