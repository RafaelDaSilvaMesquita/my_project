<html>

<head>
  <link href="style.css" rel="stylesheet" media="all">
  <meta name="author" content="Stephane Brunet" />
  <link rel="icon" type="image/svg+xml" href="php.svg">
  <title>PHP-8-POO</title>
</head>

<body>
  <header>
    <div>
      <h1>PHP-8-POO</h1>
    </div>
    <nav>
      <a href="9-1-try-catch.php">9 Try Catch</a>
      <a href="10-droits.php">10 droits</a>
      <a href="11-connexion.php">11 connexion</a>
    </nav>

  </header>
  <article>
    <?php
    class Vehicule_a_moteur
    {
      public $marque = "Aston Martin";
      protected $vitesse = 280;
      private $roues = 4;
    }

    class Voiture extends Vehicule_a_moteur
    {
      public function avancer()
      {
        echo "J'avance à  " . $this->vitesse . " km/h \n";
      }
      //appel autorisé car on est à  l 'intérieur d'une classe dérivée
      public function nombreRoues()
      {
        echo "il y a " . $this->roues;
        //appel interdit, le nombre de roues est privé
      }
    }
    $maVoiture = new Voiture();

    echo $maVoiture->marque;
    $maVoiture->avancer();
    //affiche "J'avance à  280 km/h"
    $maVoiture->nombreRoues();
    //génère une erreur fatale
    ?>
  </article>
</body>

</html>