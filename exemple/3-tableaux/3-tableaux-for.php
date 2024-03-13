<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-3-tableaux</title>
</head>
<body>
<header>
    <div><h1>PHP-3-Tableau</h1></div>
    <nav>
        <a href="2-tableaux-asso.php">2 tableaux assos</a>
        <a href="3-tableaux-for.php">3 tableaux for</a>
        <a href="4-tableaux-foreach.php">4 tableaux foreach</a>
    </nav>

</header>
<article>
Affiche la boucle for :<br />

<?php
// On crée notre array $prenoms
$stephane=htmlentities('Stéphane', ENT_NOQUOTES, 'utf-8');

$prenoms = array ($stephane, "Marc", "Charlotte", "Sophie");
// Puis on fait une boucle pour tout afficher :
$count = count($prenoms);
//$count notre d'entrées dans le Tableau, nom non reservé
for ($numero = 0; $numero < $count; $numero++)
	//ou for ($numero = 0; $numero < 4; $numero++)
	{
	echo $prenoms[$numero] . '<br />'."\n";
	// affichera $prenoms[0], $prenoms[1] etc.
	}

for ($numero = $count-1; $numero >= 0; $numero--)
	//ou for ($numero = 3; $numero >= 0; $numero--)
	{
	echo $prenoms[$numero] . '<br />'."\n";
	// affichera $prenoms[3], $prenoms[2] etc.
	}
?>


</body>
</html>
