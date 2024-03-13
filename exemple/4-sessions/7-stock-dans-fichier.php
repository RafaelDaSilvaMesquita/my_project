<html>
<head>
  <link href="style.css" rel="stylesheet" media="all">
  <meta name="author" content="Stephane Brunet" />
  <link rel="icon" type="image/svg+xml" href="php.svg">
  <title>PHP-4-sessions</title>
  <meta charset="utf-8">
</head>
<body>
<header>
    <div><h1>PHP-4-Session</h1></div>
    <nav>
        <a href="6-serialisation!.php">6 serialisation</a>
        <a href="7-stock-dans-fichier.php">7 Stockage</a>
        <a href="8-rendu.php">8 rendu </a>
    </nav>

</header>
<article>
Sérialisation stockage<br />

<?php // Stockage dans un fichier
$fichier = 'recette_gateau_citron.txt';

$recette = "Ingrédients : 2 yaourts, un peu de farine, 2 oeuf, du jus de citron
- On mélange tout
- On coule dans un moule à gateau
- On met tout au four pendant 1h.
- On va faire une sieste lentement
";

file_put_contents($fichier, $recette, FILE_APPEND | LOCK_EX);
 ?>
<a href="8-rendu.php">Restitution</a>
</article>
</body>
</html>
