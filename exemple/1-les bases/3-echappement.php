<html>
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-1-ma premiere page <?php echo "en php"; ?>
</title>
</head>
<body>
  <header>
      <div><h1>PHP-1-Les bases</h1></div>
      <nav>
         <a href="2-title.php"> 2  title </a>
         <a href="3-echappement.php"> 3 &eacute;chappement</a>
         <a href="4-variables.php"> 4 Variables</a>
      </nav>
  </header>

	<article>
	  <h4>&Eacute;chappement</h4><br />

		<?php
    echo " \"hello world,\" " ;
    ?>
    <br />
    <?php
    // commentaire
    echo ' "hello world," ' ;
    echo "\n";
    echo  '\'hello world,\'' ;
    ?>

	</article >
</body>
</html>
