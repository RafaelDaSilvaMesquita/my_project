<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<meta charset="utf-8">
<title>PHP-3-tableaux</title>
</head>
<body>
<header>
    <div><h1>PHP-3-Tableau</h1></div>
    <nav>
        <a href="4-tableaux-foreach.php">4 tableaux foreach</a>
        <a href="5-tableaux-print_r.php">5 tableaux printr</a>
        <a href="6-tableaux-search!.php">6 tableaux search !</a>
    </nav>

</header>
<article>
Affiche boucle print_r :<br />

<?php

$coordonnees = array (
'prenom' => 'Stephane',
'nom' => 'Brunet',
'adresse' => 'Arche de la défense',
'ville' => 'Paris la D&eacute;fense',
'cp' => 92044);

echo 'Print_r <pre>';
print_r($coordonnees);
echo '</pre>';

echo 'Var_dump <pre>';
var_dump($coordonnees);
echo '</pre>';

?>
</article>
</body>
</html>
