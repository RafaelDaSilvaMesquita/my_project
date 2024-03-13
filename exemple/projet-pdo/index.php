<?php
include("connexion.php");

$sql = "SELECT annee, descript, lien
        FROM quinte
        ORDER BY annee";
$annees = $bdd->query($sql);
//var_dump($annees);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>projet php Formation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="projet php Formation" />

	<meta name="author" content="Stephane Sources Codrops" />
	<link rel="stylesheet" href="css/demo.css" />
	<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
	<noscript>
		<link rel="stylesheet" type="text/css" href="css/nojs.css" />
	</noscript>
</head>

<body>
	<div class="container">

		<header>
			<h1>Diapo avec graph <span>avec CSS3 PHP et jQuery</span></h1>
			<h2>Entete Diaporama avec les chiffres</h2>

		</header>
		<div id="da-slider" class="da-slider">
			<?php

			while ($donnees = $annees->fetch(PDO::FETCH_OBJ)) { 
				// $pres='chiffres';
				$oy = date('Y');

				if ($donnees->annee <= $oy) {
					$pres = 'Chiffres';
				} else {
					$pres = 'Prévisions';
				}
				echo '<div class="da-slide">
						<h2>' . $pres . ' ' . $donnees->annee . '</h2>
						<p>' . $donnees->descript . '</p>
						<a href="' . $donnees->lien . '" class="da-link" target="_blank">En savoir +</a>
						<div class="da-img">
							<img src="pages/image.php?annee=' . $donnees->annee . '" alt="Chiffres de ' . $donnees->annee . '" />
						</div>
					</div>';
			}

			?>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
	</div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.cslider.js"></script>
	<script type="text/javascript">
		$(function () {

			$('#da-slider').cslider();

		});
	</script>
</body>

</html>