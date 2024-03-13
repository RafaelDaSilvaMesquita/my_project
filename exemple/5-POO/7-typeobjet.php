<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-8-POO</title>
</head>
<body>
<header>
    <div><h1>PHP-8-POO</h1></div>
    <nav>
        <a href="6-utilconst.php">6 utiliser une constante</a>
        <a href="7-typeobjet.php">7 type</a>
        <a href="8-constructeur.php">8 constructeur</a>
    </nav>

</header>
<article>
  <?php
    class Voiture {}
    $maVoiture = new Voiture();
    if ($maVoiture instanceof Voiture)
    {echo "Il s'agit d'une Voiture" ;}
    else
    {echo "Il ne s'agit pas d'une Voiture";}
  ?>

</body>
</html>
