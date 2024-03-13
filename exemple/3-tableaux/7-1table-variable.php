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
        <a href="6-tableaux-search!.php">6 tableaux search !</a>
		      <a href="#">7 tableaux trie</a>
          <a href="7-1table-variable.php">7 tableaux -variable</a>
        <a href="8-tableaux-2D.php">2D</a>
    </nav>

</header>
<article>
  Liste Array => Variables <br />

  <?php
    $prenoms = array ('Stephane', 'Marc', 'Charlotte', 'Sophie', 'Luc');
    list($name1,$name2,$name3,$name4)=$prenoms;
    //$name1=$prenoms[0];
    echo "$name1-$name2-$name3-$name4";
    // boucle qui ferait la même chose

    for ($i = 0; $i < 5; $i++)
    	{
         ${"nickname$i"}= $prenoms[$i];
         //nom de variable dynamique
    	}
    echo $nickname2;
    //$name4

  ?>
</article>

</body>
</html>
