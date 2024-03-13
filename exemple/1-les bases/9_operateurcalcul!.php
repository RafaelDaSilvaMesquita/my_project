<html>
<head>

<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" /> <meta charset="utf-8">
<title>PHP-1-Les op&eacute;rations </title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="8-concatenation.php"> 8 concatenation</a>
        <a href="9_operateurcalcul!.php"> 9 op&eacute;rateurs</a>
        <a href="10-comparaison.php"> 10 comparaison</a>
    </nav>

</header>

<article>
<?php
echo 1+1; echo "<br />" ;//addition
echo 1-1; echo "<br />" ;//soustraction
echo 1*1; echo "<br />" ;//multiplication
echo 1/1; echo "<br />" ;//division
echo 1%1; //modulo (reste de la division)
?>
<br /><br />
<?php
$x = 5;
// $x=$x+1; peut s'écrire
$x += 1; //ajoute à la valeur existante
$x -= 2; //soustrait à la valeur existante
//die('toto');
$x *= 3; //multiplie la valeur existante
$x /= 4; //divise la valeur existante
echo $x ; //affiche "3"
?>

</article

></body>
</html>
