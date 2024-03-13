<?php
include("connexion.php");

$sql = "SELECT annee, descript FROM quinte";
$resultat = mysqli_query($bdd,$sql);

?>
<html lang="fr">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>projet php Formation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="projet php Formation" />

        <meta name="author" content="Stephane Sources Codrops" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
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
				while($donnees = mysqli_fetch_assoc($resultat))
				{
					$annee = $donnees['annee'];
					$texte = str_replace("é", "&eacute;",$donnees['descript']);
					echo "<div class='da-slide'>";
					
					if (floor($annee) > floor(date('Y')))
					{
						echo "<h2>Prévisions $annee</h2>";
					}
					else
					{
						echo "<h2>Chiffres $annee</h2>";
					}
					echo "<p>$texte</p>";
					echo "<a href='liste.php?annee=$annee' class='da-link'>Acceder aux chiffres</a>";
					echo "<div class='da-img'><img src='graph.php?annee=$annee' /></div>";
					echo "</div>";
				}
				mysqli_free_result($resultat);
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
			$(function() {

				$('#da-slider').cslider();

			});
		</script>
    </body>
</html>
