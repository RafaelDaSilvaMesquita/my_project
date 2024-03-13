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
        <a href="3-methode.php">3 méthode</a>
        <a href="4-utilobjet.php">4 utiliser un objet</a>
        <a href="5-utilmethode.php">5 utiliser une méthode</a>
    </nav>

</header>
<article>
  <?php
  class CompteEnBanque { public $solde = 0;}

  $mon_compte = new CompteEnBanque();
  echo 'Le solde de mon compte  est :'.
  $mon_compte->solde .' <br /> ' ;
  //affiche 0
  $mon_compte->solde = 6000 ;
  echo 'Maintenant le solde de mon compte est : '
  .$mon_compte->solde .'€';

  ?>
</article>
</body>
</html>
