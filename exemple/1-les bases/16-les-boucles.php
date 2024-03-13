
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" /> <meta charset="utf-8">
<title>PHP-1-Les variables serveur</title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les boucles</h1></div>
    <nav>
      <a href="15-variable_serveur!.php"> 15 variable serveur</a>
      <a href="16-les-boucles.php"> 16 boucles</a>
      <a href="17-les-bouclesFor.php"> 17 boucles for</a>
    </nav>
</header>
<article>

  <?php
   $i = 0;
       while($i < 10000)
       {
          echo $i.'&nbsp; &nbsp;';
          $i= $i + 1;
  		//ou   $i++;
       }
  ?>

</article>
</body>
</html>
