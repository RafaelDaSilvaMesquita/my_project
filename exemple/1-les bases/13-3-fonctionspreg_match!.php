
<html>
<head>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<title>PHP-1-Les fonctions </title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="13-2-fonctionsSTR_replace.php"> 13 Ft remplace !</a>
        <a href="13-3-fonctionspreg_match!.php"> 13 match</a>
        <a href="13-4-fonctionsMath!.php"> 13 Ft Math</a>
    </nav>

</header>


<article>


<?php
  if (preg_match("#violon#i", "J'aime jouer du Violon."))

  { echo 'VRAI'; }
  else
  { echo 'FAUX'; }
?>

<?php
  $texte = 'le chat est revenu à 12H45 ';
  $recherche = '#([0-1]?[0-9]|2[0-3])h[0-5][0-9]#i' ;
  if (preg_match($recherche, $texte))
  { echo 'VRAI2'; }
  else
  { echo 'FAUX2'; }
?>

<?php
  $texte = "abcddd gfgdfgdgdgd" ;
  $recherche = "/d{4}/" ;

  if (preg_match($recherche, $texte))
  { echo 'VRAI3'; }
  else
  { echo 'FAUX3'; }
   // Renvoie False
  // car la chaîne ne contient que trois fois "d" à la suite
?>
<br />
str_pad  fonction de remplissage

<?php
  $dix_signes=str_pad('php', 10);
  echo '<pre>'.$dix_signes.'</pre>';
  echo str_pad('php', 10, "_", STR_PAD_BOTH);
?>

</article>
</body>
</html>
