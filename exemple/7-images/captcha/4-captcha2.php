<?php
$captcha = Date("d") + 1;
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>II Sécurite et PHP MySql</title>
	<meta name="description" content="Support de cours Stephane Brunet" />
	<meta name="keywords" content="Support de cours Sécurite et PHP MySql" />
	<meta name="author" content="Stephane Brunet, s.brunet@leserveur.com" />
	<link rel="shortcut icon" href="../modele/favicon.ico">
	<link rel="stylesheet" type="text/css" href="form.css" />
	<link href="../style.css" rel="stylesheet" media="all">
	<!-- <link rel="stylesheet" type="text/css" href="../modele/css/component.css" /> -->
	<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>

<body>
	<div class="container">
		<header>
			<h1><span>php MySql</span> Sécurité Form</h1>
			<section class="section section--menu" id="Shylock">
			</section>
		</header>
		<section class="section section--intro">
			<p>Les avancées du HTML5 et SVG
			</p>
		</section>
		<section class="content content--relate">

			<p style="width:20vw; position:relative;">
				<svg id="cadena" version="1.1" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"
					xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/"
					xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
					<path id="anneau"
						d="m13 3c-5.523 0-10 3.626-10 8.0993v8.0993h4v-8.0993c0-2.6833 2.687-4.8596 6-4.8596s6 2.1763 6 4.8596v8.0993h4v-8.0993c0-4.4732-4.477-8.0993-10-8.0993z"
						fill="#aab8c2" stroke-width=".89996" />
					<path id="serrure"
						d="M26 32c0 2.209-1.791 4-4 4H4c-2.209 0-4-1.791-4-4V20c0-2.209 1.791-4 4-4h18c2.209 0 4 1.791 4 4v12z"
						fill="crimson" />
					<path id="clef"
						d="M35 9c0-4.971-4.029-9-9-9s-9 4.029-9 9c0 3.917 2.507 7.24 6 8.477V33.5c0 1.381 1.119 2.5 2.5 2.5 1.213 0 2.223-.864 2.45-2.01.018.001.032.01.05.01.553 0 1-.447 1-1v-1c0-.553-.447-1-1-1v-1c.553 0 1-.447 1-1v-2c0-.553-.447-1-1-1v-2.277c.596-.347 1-.984 1-1.723v-4.523c3.493-1.236 6-4.559 6-8.477zm-9-7c1.104 0 2 .896 2 2s-.896 2-2 2-2-.896-2-2 .896-2 2-2z"
						fill="#C1694F" />
				</svg>
			<form method="post" action="4-captcha2.php" name="cle">
				<input type="submit" id="valide" value="Vérouillé" />
				<label id="first-button" class="interaction-btn" data-animation="captcha">
					Cliquez 1
					<?php echo file_get_contents("recup/cle.svg"); ?>
					<input type="radio" id="cle2" name="secu" value="1" />
				</label>
			</form>

			</p>
		</section>
		<section class="content content--related">
			<p>
			</p>
		</section>
	</div>
	<!-- /container -->
	<script src="../modele/js/classie.js"></script>
	<script src="../modele/js/clipboard.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
	<script src="captcha.js"></script>

	<script>
		//<![CDATA[]
		document.querySelector("#cadena").addEventListener("click", unlock)
		const marge = Math.floor(Math.random() * 700)
		//console.info(marge)
		document.querySelector("#cadena").style.left = marge + "px"
		function unlock() {
			document.querySelector("#clef").classList.add("cache");
			document.querySelector("#valide").disabled = false;
			document.querySelector("#serrure").style.fill = "LimeGreen";
			document.querySelector("#valide").value = "envoyer";

		}
		document.querySelector("#cle2").onclick = function () {
			document.querySelector('input[name = secu]:checked').value = <?php echo $captcha; ?>;
		}
		// ]]>
	</script>
</body>

</html>