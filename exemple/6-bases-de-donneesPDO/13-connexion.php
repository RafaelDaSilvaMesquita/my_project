<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-8-POO</title>
</head>
<body>
<header>
    <div><h1>PHP-7-POO</h1></div>
    <nav>
        <a href="10-droits.php">10 droits</a>
        <a href="13-connexion.php">11 connexion</a>
        <a href="mvc/index.php?section=index">MVC</a>
    </nav>

</header>
<article>
  <?php
  define("HOTE", "localhost");
  define("BASE", "phh");
  define("USER", "root");
  define("PASS", "");
  $bdd = new PDO('mysql:host='.HOTE.';dbname='.BASE.';
  charset=utf8', USER, PASS);
  function filmAnnee($annee){
    global $bdd;
    // Récupérer en base de données les infos du membre
      $requete= "SELECT titre, `date` FROM film  WHERE `date` = $annee";
      //echo $requete;
      $resultats=$bdd->query($requete);
    // afficher les résultats de la base
    while( $donnee = $resultats->fetch(PDO::FETCH_OBJ))
        {
          echo 'TITRE : '.$donnee->titre.' - '.$donnee->date. '<br />';
        }
      $resultats->closeCursor();
    }
      filmAnnee(1980);
  ?>

</article>
</body>
</html>
