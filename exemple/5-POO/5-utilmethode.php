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
        <a href="4-utilobjet.php">4 utiliser un objet</a>
        <a href="5-utilmethode.php">5 utiliser une méthode</a>
        <a href="6-utilconst.php">6 utiliser une constante</a>
    </nav>

</header>
<article>
  <?php
  class Voiture {
    function klaxonne()  {
    echo "Vous klaxonnez fort !";
    }
    function gazoline($type)  {
    echo "Faite le plein avec  $type, si dispo";
    }
  }
  $ma_voiture = new Voiture() ;
  $ma_voiture->klaxonne() ;
  echo '<br />';
  $ma_voiture->gazoline('du super') ;

  class MonPersonnage {
    // Initialiser les valeurs à vide ou à -1 selon le besoin.
    private $nom = "";
    private $titre = "";
    // On peut ne pas passer de tableau de paramètres.
    public function __construct($tabl = null)
      {
          echo $tabl["nom"].' maître '.$tabl["titre"];
      }
    }

$args = array();
$args['nom'] = "Luke";
$args['titre'] = "Jedi";
$args['frere'] = "Leïa";
echo '<br />';
$padawan = new MonPersonnage($args);

  ?>
</article>
</body>
</html>
