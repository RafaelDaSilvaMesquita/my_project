<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" /> <meta charset="utf-8"><meta charset="utf-8">
<meta charset="utf-8">
<title>PHP-1-Les comparaisons</title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="10-comparaison.php"> 10 comparaison</a>
        <a href="11-logique.php"> 11 logique</a>
        <a href="12-fonctions.php"> 12 fonctions</a>
    </nav>

</header>


<article>

<?php
$variable=5;
$sup='6 tomates';
if($variable > 2 && $variable < $sup)// && ou AND
  {
    echo 'valeur entre 2 et 10 (exclus)';
  }
  else {
    echo'valeur hors champs';
  }
?>
<br />
<?php
$variable=0;
if($variable > 2 || $variable < 10) // || ou OR
  {
      echo 'test r&eacute;ussi';
  }
?>
</article>
</body>
</html>
