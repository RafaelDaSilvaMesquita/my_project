<html>

<head>
  <link href="style.css" rel="stylesheet" type="text/css" media="all">
  <meta name="author" content="Stephane Brunet" />
  <meta charset="utf-8">
  <title>PHP-1-Les Les boucles For</title>
</head>

<body>
  <header>
    <div>
      <h1>PHP-1-Les boucles</h1>
    </div>
    <nav>
      <a href="18-les-bouclesdo-while.php">18 boucles do-while</a>
      <a href="19-les-bouclesdo-while-html!.php"> 19 boucles do-while</a>
      <a href="19-1-les-boucles-switch.php"> 19 boucles switch</a>
      <a href="20-repertoire!.php"> 20 repertoire </a>
    </nav>

  </header>


  <article>

    Boucles Do while <br />
    <?php
    $i = 4;
    do { ?>

      <br />texte et balises HTML
      <?php echo $i; ?>
      &nbsp;indice;
      <?php $i++;
    } while ($i < 9); ?>
  </article>

</body>

</html>