<?php
include('connexion.php');
include('modele-controle.php');
 ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Full Images Ouhahou | Stephane</title>
		<meta name="description" content="Full Images Ouhahou | Stephane." />
		<meta name="author" content="Formation Stephane" />
		<link rel="icon" type="image/png" href="img/favicon.png" />
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
	</head>
	<body class="loading">
		<svg class="hidden">
			<symbol id="icon-plus" viewBox="0 0 25 24">
				<title>plus</title>
				<path d="M13.568 11.216h11.216v1.568H13.568V24H12V12.784H.784v-1.568H12V0h1.568v11.216z"/>
			</symbol>
			<symbol id="icon-arrowdown" viewBox="0 0 12 25">
				<title>arrow down</title>
				<path d="M4.916.3v21.017l-3.563-3.564L.25 18.856 5.7 24.3l5.45-5.444-1.102-1.103-3.564 3.564V.3z"/>
			</symbol>
		</svg>
		<main>
			<div class="message">View on a larger screen to see the effect</div>
			<!-- Grid lines -->
			<div class="grid grid--deco">
				<div class="grid__box"></div>
				<div class="grid__box"></div>
				<div class="grid__box"></div>
				<div class="grid__box"></div>
				<div class="grid__box"></div>
			</div><!--/grid--deco-->
			<!-- Outer grid (header, title, etc.) -->
			<div class="grid grid--outer">
				<header class="codrops-header">
					<h1 class="codrops-header__title">Welcome Exo BDD</h1>
				</header>
				<div class="title-wrap">
					<h2 class="title">Welcome Exo BDD</h2>
					<span class="subtitle">Un front office Dynamique</span>
					<span class="year">2018</span>
				</div>
				<a href="https://github.com/codrops/FullImageReveal/" class="github">GitHub</a>
				<div class="side">
					<span class="side__content">Produced By Vous</span>
					<span class="side__content">Made by efforts</span>
				</div>
			</div><!--/grid--outer-->
			<!-- Full view container -->
			<div class="fullview">
        <?php	for($i=0; $i < 4; $i++)
        {
        				  echo'
				<div class="fullview__item" style="background-image: url(img/'.$num[$i].'.jpg)">
					<span class="fullview__item-number">0'.($i+1).'</span>
					<div class="fullview__item-titlewrap">
						<h3 class="fullview__item-title">'.$titre[$i].'</h3>
						<p class="fullview__item-description">'.$descript[$i].'</p>
						<span class="fullview__item-more">more</span>
					</div>
				</div>
      ';
      }
      ?>
				<h3 class="fullview__title">PHP Dynamique</h3>
			</div><!--/fullview-->
			<!-- Revealer element -->
			<div class="revealer"></div>
			<!-- Thumbs grid -->
			<div class="grid grid--thumbs">


			<?php	for($i=0; $i < 4; $i++)
      {
      				  echo
      				'<div class="grid__item" data-revealer-color="'.$coul[$i].'">
      					<h3 class="grid__item-title"><span>'.$titre[$i].'</span></h3>
      					<span class="grid__item-number"><span>0'.($i+1).'</span></span>
      					<div class="grid__item-imgwrap">
      						<img class="grid__item-img" src="img/thumb'.$num[$i].'.jpg" alt="Some image" />
      						<div class="grid__item-bg" style="background-image: url(img/thumb'.$num[$i].'.jpg)"></div>
      					</div>
      				</div>';
      		} 
				?>
				<div class="grid__item grid__item--more">
					<button class="grid__toggle">
						<span class="grid__toggle-inner grid__toggle-more">
							<span class="grid__toggle-text">+</span>
							<svg class="grid__toggle-icon grid__toggle-icon--more"><use xlink:href="#icon-plus"></use></svg>
						</span>
						<span class="grid__toggle-inner grid__toggle-back">
							<span class="grid__toggle-text">retour</span>
							<svg class="grid__toggle-icon"><use xlink:href="#icon-arrowdown"></use></svg>
						</span>
					</button>
				</div>
			</div><!--/grid--thumbs-->
		</main>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/TweenMax.min.js"></script>
		<script src="js/demo.js"></script>
	</body>
</html>
