<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-5-image</title>
</head>
<body>
<header>
    <div><h1>PHP-7-Images</h1></div>
    <nav>
        <a href="9-fusion.php">9 fusion </a>
        <a href="10-affichefusion.php">10 Affiche fusion</a>
        <a href="11-redim.php">11 redimention</a>
        <a href="12-svg.php">svg</a>
    </nav>

</header>
<article>
image sur image <br />
<?php
$coul="crimson";
$texte="texte";
if (date("s")>30)
  {$coul="teal";
  $texte="PHP";}
echo'
<svg width="50" height="50" viewBox="0 0 24 24">
<path d="M12 6h4v2h-4zM8 6h2v2H8zM9 10h6v2H9z" fill="'.$coul.'"/>
<path d="M21.707 8.293L20 6.586V3a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v3.586L2.293 8.293l.006.006A.986.986 0 0 0 2 9v12a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V9a.986.986 0 0 0-.299-.701l.006-.006zM18 4v6.329l-6 5.333-6-5.333V4h12zm2 16H4v-8.773l7.336 6.521a.996.996 0 0 0 1.328 0L20 11.227V20z">;
</svg>
<svg  class="pavilon" width="44" height="44"
viewBox="0 0 24 24" stroke-width="1.5" stroke="'.$coul.'" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z"/>
  <path d="M3 21h7v-3a2 2 0 0 1 4 0v3h7" />
  <line x1="6" y1="21" x2="6" y2="12" />
  <line x1="18" y1="21" x2="18" y2="12" />
  <path d="M6 12h12a3 3 0 0 0 3 -3a9 8 0 0 1 -9 -6a9 8 0 0 1 -9 6a3 3 0 0 0 3 3" />
</svg>
';?>
<div style="width:50%";>
  <?php echo file_get_contents("img/coconut.svg"); ?>
  <?php require("img/haskell2.svg"); ?>
  <?php
  $texte="-Php-";
  require("img/redhat.svg"); ?>
</div>


</body>
</html>
