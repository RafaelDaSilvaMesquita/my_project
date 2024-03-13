<html>

<head>
  <link href="style.css" rel="stylesheet" type="text/css" media="all">
  <meta name="author" content="Stephane Brunet" />
  <meta charset="utf-8">
  <title>PHP-1-Les Les boucles For</title>
  <link rel="icon" type="image/svg+xml" href="php.svg">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <style>
    mark:nth-child(even) {
      /* tous les enfants aux numéros pairs */
      background: #999;
      color: #fff;
    }

    mark:nth-child(odd) {
      /* tous les enfants aux numéros impairs */
      background: crimson;
      font-family: 'Great Vibes', cursive;
      color: #fff;
    }
  </style>
</head>

<body>
  <header>
    <div>
      <h1>PHP-1-Les boucles</h1>
    </div>
    <nav>
      <a href="16-les-boucles.php"> 16 Boucles</a>
      <a href="17-les-bouclesFor.php"> 17 boucles For</a>
      <a href="19-les-bouclesdo-while-html!.php">18 boucles do-while</a>
    </nav>


  </header>


  <article>

    Boucles For <br />
    <?php
    for ($i = 0; $i < 7; $i++) {
      echo $i . '<br />'. "\n";
    }

    $formule = "supercalifragilisticexpialidocious";
    $size = strlen($formule);
    for ($i = 0; $i < $size; $i++) {
      $subString = Substr($formule, $i, 1);
      echo '<mark style="font-size:' . mt_rand(10, 30) . '0%;">'      
       . $subString . '</mark>' . "\n";
    }
    ?>

  </article>


  <script>
    const rand = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min
    let formule = "supercalifragilisticexpialidocious"
    let size = formule.length
    //console.info(Math.random())
    for (let i = 0; i < size; i++) {
      //console.info(rand(10, 30))
      let subString = formule.substring(i, i + 1)
      document.write(`
  <mark style="font-size:${rand(10, 30)}0%;">${subString}</mark>`)
    }

  </script>
</body>

</html>