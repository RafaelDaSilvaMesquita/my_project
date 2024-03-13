
<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" /> 
<link rel="icon" type="image/svg+xml" href="php.svg">
<meta charset="utf-8">
<title>PHP-1-Les fonctions Math</title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="13-3-fonctionspreg_match!.php"> 13 match</a>
        <a href="13-4-fonctionsMath!.php"> 13 Ft Math</a>
        <a href="13-5-fonctionsChaine!.php"> 13 Chaine !</a>

    </nav>

</header>

<body>

<article>
<?php
//Abs($nombre) --Valeur absolue
$nb1=Abs(-10);  echo $nb1.'<br />';
//Ceil($nombre)--Arrondit au nombre supèrieur
$nb2=Ceil(2.8) ;  echo $nb2.'<br />';
//Floor($nombre) --Arrondit à l'entier inférieur
$nb3=Floor(2.8) ;  echo $nb3.'<br />';
//round($nombre, précision)-- Arrondit.
$nb4=round(1.23456789, 3);  echo $nb4.'<br />';
//max($a,$b,$c, ... ) --La plus grande valeur d'une liste a virgule ou d'un tableau.
$nb44=Max(2,5) ;  echo $nb44.'<br />';
//$nb5=min($a,$b,$c, ... ) --La plus petite valeur.
$nb5=Min(2,5,8);  echo $nb5.'<br />';
//mt_rand()-- valeur aléatoire
$nb6=mt_rand(10,15);  echo $nb6.'<br />';

//php 8.2
$randomizer = new Random\Randomizer(new Random\Engine\Mt19937());
echo $randomizer->getInt(1, 100);

echo'<br />'.(1_000_000*2);
echo '<br />'.number_format( 80000000, 3, '_', '_' );
?>
</article>
<script>
let uuid = self.crypto.randomUUID();
console.info(uuid);

</script>
</body>
</html>
