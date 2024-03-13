<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<meta charset="utf-8">
<title>PHP-3-tableaux</title>
</head>
<body>
<header>
    <div><h1>PHP-3-Tableau</h1></div>
    <nav>
		<a href="1-tableaux-num.php">1 tableaux num</a>
        <a href="2-tableaux-asso.php">2 tableaux assos</a>
        <a href="3-tableaux-for.php">3 tableaux for</a>
    </nav>

</header>
<article>

<?php
// On crée notre array $coordonnees
$coordonnees = array (
  'prenom' => 'Stephane',
  'nom' => 'Brunet',
  'adresse' => 'Arche de la Défense',
  'ville' => 'Paris la Défense');

$coordonnees['cp']=92240;

echo $coordonnees['ville']. '<br />';

echo $coordonnees['cp'];


?>
</article>


</body>
</html>
