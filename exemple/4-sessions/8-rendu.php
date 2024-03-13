<html>
<head>
  <link href="style.css" rel="stylesheet" media="all">
  <meta name="author" content="Stephane Brunet" />
  <link rel="icon" type="image/svg+xml" href="php.svg">
  <meta charset="utf-8">
  <title>PHP-4-sessions</title>
</head>
<body>
<header>
    <div><h1>PHP-4-Session</h1></div>
    <nav>
        <a href="7-stock-dans-fichier.php">7 Stockage</a>
        <a href="8-rendu.php">8 rendu </a>
        <a href="9-local-storage.php">9 local </a>

    </nav>

</header>
<article>

Sérialisation stockage<br />
 <pre>
<?php // restitution
  $fichier = 'recette_gateau_citron.txt';
  //$fichier = '4-sessions.php'; //attention à la sécurirté.
  $recette = file_get_contents($fichier, false, NULL, 4, 150);

  /* filename
    Nom du fichier à lire.
    use_include_path (bool)
    context Une ressource de contexte valide,
    debut du pointeur
    maxlen
    */
  echo $recette;
 ?>
</pre>
</article>
</body>
</html>
