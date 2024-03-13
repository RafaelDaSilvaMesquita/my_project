<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-3-tableaux</title>
</head>
<body>
<header>
    <div><h1>PHP-3-Tableau</h1></div>
    <nav>

		<a href="7-tableaux-trie.php">7 tableaux trie</a>
    <a href="8-tableaux-2D.php">8 tableaux 2D</a>
    <a href="9-colonne.php">9 colonne</a>
    <a href="../4-sessions/1-cookies.php">&gt; &gt; </a>
    </nav>

</header>
<article>
For ou foreach

<?php
for($i = 0; $i <= 10000; $i++) {
    $table_exemple[] = (string)rand(11111, 99999);
}
$size = count($table_exemple);
$startingTime = microtime(true);
// boucle for
for($i = 0; $i < $size; $i++) { }

$endingTime = microtime(true);
$forlooptime = $endingTime - $startingTime;

$startingTime = microtime(true);

// foreach loop performance evaluation
foreach($table_exemple as $toto=>$unit) { }

$endingTime = microtime(true);
$foreachlooptime = $endingTime - $startingTime;

echo "<br />Boucle for : "
. number_format($forlooptime * 1000, 6);
echo'<br />';
echo "\nBoucle foreach : "
. number_format($foreachlooptime * 1000, 6);

echo'<br />';
//print_r($table_exemple);
?>


</article>

</body>
</html>
