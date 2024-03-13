<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<meta charset="utf-8">
<title>PHP-3-tableaux</title>
</head>
<body>
<header>
    <div><h1>PHP-3-Tableau</h1></div>
    <nav>
		<a href="1-tableaux-num.php">1 tableaux num</a>
        <a href="2-tableaux-asso.php">2 tableaux assos</a>
        <a href="3-tableaux-for.php">3 tableaux for</a>
    </nav>

</header>
<article>


<?php
// La fonction array permet de créer un array
$prenoms = array ('Stephane', 'Marc', 'Charlotte', 'Sophie', 3.14);

$noms[0] = 'Brunet';
$noms[1] = 'Martin';
$noms[2] = 'O\'pomme';

$noms[] = 'Schmitt';// sera $nom[3]
$noms[] = 'O\'Timmins';// sera $nom[4]

echo $prenoms[2];
echo'<br />';
echo $noms[2];

//echo $noms{2};

echo'<pre>';
var_dump($noms);
echo'</pre>';
?>
</article>


</body>
</html>
