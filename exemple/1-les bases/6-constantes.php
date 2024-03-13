<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<meta charset="utf-8">
<title> 1-Les constantes </title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="5-variables!.php"> 5 variable !</a>
        <a href="6-constantes.php"> 6 constantes</a>
        <a href="7-concatenation.php"> 7  concatenation</a>
    </nav>

</header>
  <article>
	<?php
    // Noms valides
  define("FOO", "something");
  define("FOO2","something else");
  define("FOO_BAR", 54);
  //define("FOO_BAR", 55);
  const FOO3="new one";
  // Noms invalides
  // define("2FOO","something");

  echo '<br />'.FOO2.'<br />';
  echo '<br />'.FOO3.'<br />';
  echo FOO_BAR;
  define("FOO2","something else too");
  ?>

  Constantes magiques <br />
	<?php
	echo __FILE__ ;
	?>
	<br />
	<?php
	echo __DIR__ ;
	?>

 </article>
</body>
</html>
