
<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<link rel="icon" type="image/svg+xml" href="php.svg">
<meta name="author" content="Stephane Brunet" />
<title>PHP-1-Les fonctions chaine</title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="13-5-fonctionsChaine!.php"> 13 Ft Chaine</a>
        <a href="13-6-fonctionsChaineprintf.php"> 13 chaine print</a>
        <a href="13-7-fonctionsChaineTag.php"> 13 Ft Chaine tag</a>
    </nav>

</header>

<article>

	<?php
  $editeur=htmlentities('Alphabet');
	$navi = " Chrome";
	$nombre=(float)65.43;
	$annee=(int)2023;
	$format ="En %d %.2f %% des internautes
  utilisent  %s de %s";
	printf($format,$annee,$nombre,$navi,$editeur);
	?>

</article>

</body>
</html>
