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
        <a href="2-objet.php">2 objets</a>
        <a href="3-methode.php">3 méthode</a>
        <a href="4-utilobjet.php">4 utiliser un objet</a>
    </nav>

</header>
<article>
  <?php
  class Voiture {
  public $marque = ' Aston Martin ' ;
  function freiner ($force_de_freinage){
    // instruction freinage
    }
  const  motrice = 4;
  }

  $db10 = new Voiture();
  $db9 = new Voiture();
  $db7 = new Voiture();
  echo $db7->marque;
  ?>
</article>
</body>
</html>
