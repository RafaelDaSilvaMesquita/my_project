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
        <a href="8-constructeur.php">8 constructeur</a>
        <a href="9-heritage.php">9 heritage</a>
        <a href="10-droits.php">10 droits</a>
    </nav>

</header>
<article>
  <?php
  function inverse($x) {
      if (!$x) {
          throw new Exception('Division par zéro.');
      }
      return 1/$x;
  }

  try {
      echo inverse(5) . "\n";
      echo inverse(0) . "\n";
  } 
  catch (Exception $e) {
      echo 'Exception reçue : ',  $e->getMessage(), "\n";
  }

  // Continue execution
  echo "suite de l'execution \n";
  ?>

</body>
</html>
