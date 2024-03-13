<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<meta charset="utf-8">
<title>PHP-2-get</title>
</head>
<body>
<header>
    <div><h1>PHP-2-formulaire</h1></div>
    <nav>
		<a href="1-get.php"> Get </a>
    <a href="2-getsecure!.php">2 get secure </a>
		<a href="3-getsecureII!.php">3 get secure II</a>
    </nav>

</header>
<article>


 Recupération des variables à l'aide de Get <br />
<?php $jedi="Luke"; ?>

<a href="1-get.php?name=<?php echo $jedi; ?>&amp;age=33">1-get.php?name=<?php echo $jedi; ?>&amp;age=33</a>

<p>Bonjour <?php echo $_GET['name']; ?> </p>
<p>D&eacute;j&agrave; <?php echo $_GET['age']; ?> ans !</p>
</article>
</body>
</html>
