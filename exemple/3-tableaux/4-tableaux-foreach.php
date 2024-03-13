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
        <a href="3-tableaux-for.php">3 tableaux for</a>
        <a href="4-tableaux-foreach.php">4 tableaux foreach</a>
        <a href="5-tableaux-print_r.php">5 tableaux printr</a>
    </nav>

</header>
<article>
Affiche boucle foreach :<br />

<?php
// On crée notre array $prenoms
$prenoms = array ('Stéphane', 'Marc', 'Charlotte', 'Sophie');
// Puis on fait une boucle pour tout afficher :
foreach($prenoms as $element)
  {
    echo $element . '<br />'."\n"; // affichera $prenoms[0], $prenoms[1] etc.
  }


echo '<br /> Associatif<br /><br />';

$coordonnees = array (
'prenom' => 'Stephane',
'nom' => 'Brunet',
'adresse' => 'Arche de la défense',
'ville' => 'Paris la Défense',
'cp' => '92044');

foreach($coordonnees as $element)
  {
    echo $element.'<br />';
  }

echo '<br /> Associatif valeurs et clé <br /><br />';
foreach($coordonnees as $cle =>  $element)
  {
    echo '['. $cle .'] correspond à <strong>'. $element .'</strong><br />';
  }
?>
</article>
</body>
</html>
