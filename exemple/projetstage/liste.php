<?php
function redirige($url)
{
   die('<meta http-equiv="refresh" content="0;URL='.$url.'">');
}
session_start();
include("connexion.php");

//Récupération des chiffres du graphique
$annee = null;
$id_diapo = null;
if (isset($_GET['annee']))
{
	$annee = $_GET['annee'];
	$sql = "SELECT diapo_chiffre.id as id_chiffre, diapo.id as id_diapo, legende, couleur, couleur_texte, valeur FROM diapo_chiffre INNER JOIN diapo ON diapo.id = diapo_chiffre.diapo_id WHERE diapo.annee = $annee";
}
if (isset($_GET['iddiapo']))
{
	$id_diapo = $_GET['iddiapo'];
	$sql = "SELECT diapo_chiffre.id as id_chiffre, diapo.id as id_diapo, legende, couleur, couleur_texte, valeur FROM diapo_chiffre INNER JOIN diapo ON diapo.id = diapo_chiffre.diapo_id WHERE diapo.id = $id_diapo";
}

if(isset($_SESSION['nom']) AND isset($_SESSION['pwd']))
{
}
else{
	redirige('aut.php?iddiapo='.$id_diapo."&annee=".$annee);
}

$resultat = mysqli_query($bdd,$sql);


?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div class="container">
	<header>
	<?php
	if (floor($annee) > floor(date('Y')))
	{
		echo "<h1>Prévisions de l'annee $annee</h1>";
	}
	else
	{
		echo "<h1>Chiffres de l'annee $annee</h1>";
	}
	?>
	</header>
	
	<div class="container">
			
	
	<div id="da-slider" class="da-slider">
		<div class='da-slide'>
			<table border=1>
			<tr><td>Legende</td><td>Couleur histograme</td><td>Couleur texte</td><td>Valeur</td><td>Modifier</td><td>Supprimer</td></tr>
			<?php

			while($donnees = mysqli_fetch_assoc($resultat))
			{
				$legende = $donnees['legende'];
				$couleur = $donnees['couleur'];
				$couleur_texte = $donnees['couleur_texte'];
				$valeur = $donnees['valeur'];
				$diapo_id = $donnees['id_diapo'];
				$id = $donnees['id_chiffre'];
				echo "<tr><td>$legende</td><td>$couleur</td><td>$couleur_texte</td><td>$valeur</td>
					<td align=center><a href='form.php?id=".$id."&iddiapo=".$diapo_id."'><img src='images/modif.gif' width=20 /></a></td>
					<td align=center><a href='delete.php?id=".$id."&iddiapo=".$diapo_id."'><img src='images/supp.jpeg' width=20 /></a></td></tr>";
			}

			mysqli_free_result($resultat);
			?>
			</table>
		<br>
		<a href="index.php" class='da-bouton'>Retour</a>
		<?php
			echo "<a href='form.php?iddiapo=".$diapo_id."' class='da-bouton'>Ajouter</a>";
		?>
		<div class='da-img'></div>
	</div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
<script type="text/javascript">
	$(function() {
	
		$('#da-slider').cslider();
		
	});
</script>	
</body>
</html>