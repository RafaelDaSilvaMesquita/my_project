<?php
require_once("session.php");
//include("../connexion.php");
include("modele-admin.php");
$donnees=get_histos();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="UTF-8" />
    <title>projet php modif</title>
    <link rel="icon" type="image/svg+xml" href="../images/bar-admin.svg">
    <link href="../css/style-admin.css" rel="stylesheet">
    <style rel="stylesheet">
      .liste{
        font-family:courier;}
      h4{
        text-align: right;
        padding-right: 10vw;
      }
    </style>
	</head>
<body>
  <h2>Liste des resultats</h2>
  <h4><a href="Logout.php">Deconnexion</a> </h4>
<?php

//var_dump($donnees);
$count=count($donnees);
for ($i = 0; $i < $count; $i++)
{
$id=$donnees[$i]['id'];
$coul=$donnees[$i]['coul'];
$legend=str_pad($donnees[$i]['legende'], 10, "_");
$valeur=str_pad($donnees[$i]['valeur'], 7, "-");

  echo '<p class="liste">'.$donnees[$i]['quinte_annee'].' | '.$legend.' | '.$valeur.'
	<a href="detail-modif.php?id='.$id.'
  " style="background-color:rgb('.$coul.');text-shadow:1px 1px 1px white; --lien:rgb('.$coul.')">Modifier</a></p>'."\n";
// <a href="detail_modif.php?id=1" style="background-color:rgb(255,25,66)">Modifier</a>"
}

?>
</body>
</html>
