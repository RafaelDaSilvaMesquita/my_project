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
        <a href="5-utilmethode.php">5 utiliser une méthode</a>
        <a href="6-utilconst.php">6 utiliser une constante</a>
        <a href="7-typeobjet.php">7 type</a>
    </nav>

</header>
<article>
  <?php
  class TondeuseGazon {
    const POUSSEE = 4 ;
  }

    $maTondeuse = new TondeuseGazon();
    echo $maTondeuse::POUSSEE ;
  ?>
  <?php
    class Jet {
    const POUSSEE = 40 ;
    public $type ;
    function setjet()
    // on peut utiliser this
      {return $this->type = self::POUSSEE;
      //return $this->type = Jet::POUSSEE;
      }
    }
    $monjet = new Jet();
    echo $monjet->setjet();

    class Example {
      const CONSTANTE_1 = 33; // public, implicite
      public const CONSTANTE_2 = "Tatooine";
      protected const CONSTANTE_3 = array();
      private const CONSTANTE_4 = 3.75;
    }
    $objet = new Example();
    echo $objet::CONSTANTE_2;
  ?>
</article>
</body>
</html>
