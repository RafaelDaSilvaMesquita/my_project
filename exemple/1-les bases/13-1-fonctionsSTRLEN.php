
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<meta charset="utf-8">
<title>PHP-1-Les fonctions</title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="12-fonctions.php"> 12 fonctions</a>
        <a href="13-1-fonctionsSTRLEN.php"> 13 Ft length</a>
        <a href="13-2-fonctionsSTR_replace.php"> 13 Ft remplace !</a>
    </nav>

</header>
<article>

<?php
  $phrase = 'Bonjour ceci est une phrase tr&egrave;s
  longue !';
  $longueur = strlen($phrase);

  echo 'La phrase ci-dessous comporte ' . $longueur .
  ' caract&egrave;res <br /> - ' . $phrase;
?>

</article>
</body>
</html>
