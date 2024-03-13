<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>1 - Les op&eacute;rations </title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="6-constantes.php"> 6 constantes</a>
        <a href="7-concatenation.php"> 7 concatenation</a>
        <a href="8-concatenation.php"> 8 concatenation</a>
    </nav>

</header>

<article>
<?php
  $etage = 16;
  echo "Nous sommes au $etage&shy;i&egrave;me &eacute;tage
  de la \"Tour\"";
?>
<br />
<?php
  $etage = 16;
  echo 'Nous sommes au $etage&shy;i&egrave;me &eacute;tage
  de la "Tour"';
?>
<br />
<?php
  echo 'Nous sommes au '.$etage.'i&egrave;me
  &eacute;tage de la "Tour"';
?>

</article>

</body>
</html>
