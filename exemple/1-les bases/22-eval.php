<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" /> <meta charset="utf-8">
<title>PHP-1-envoyer un mail</title>
</head>
<body>
<header>
    <div><h1>PHP-1-envoyer un mail</h1></div>
    <nav>
		<a href="20-repertoire!.php"> 20 repertoire </a>
    <a href="21-mail!.php">21  mail</a>
    <a href="22-eval.php">22  eval</a>
		<a href="../2-formulaires/1-get.php"> &gt; &gt;</a>
    </nav>

</header>
  <article>
    <?php
    $code = "\$a++; \$a .=\" mercenaires\"; return \$a;";
    $a = 6;
    $film = eval($code);
    echo $film;
    echo '<br />'.$code;

    ?>
</article>

</body>
</html>
