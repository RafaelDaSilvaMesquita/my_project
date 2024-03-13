<html>
<head>
  <link href="style.css" rel="stylesheet" media="all">
  <meta name="author" content="Stephane Brunet" />
  <link rel="icon" type="image/svg+xml" href="php.svg">
  <meta charset="utf-8">
  <title>PHP-4-sessions</title>
</head>
<body>
<header>
    <div><h1>PHP-4-Session</h1></div>
    <nav>
        <a href="1-cookies.php">1 cookies</a>
        <a href="2-lire-cookies.php">2 lire un cookie</a>
        <a href="3-cookies-secure.php">3 cookie secure </a>
    </nav>

</header>
<article>

Lire des Cookies <br />

<?php
 if(isset($_COOKIE['moncook']))
 echo $_COOKIE['moncook']."<br />";

 if(isset($_COOKIE['moncook2']))
 echo $_COOKIE['moncook2'];

  if(isset($_COOKIE['langue']))
  {
     $langue = $_COOKIE['langue'];
     $version=8.2;
     $fr='%.1f est la derni&egrave;re version de %s';
     $en='%.1f is %s\'s last version';
    echo "<br />";
     if($langue==='en')
      {printf($en, $version,'php');}
     else
      {printf($fr, $version,'php');}
    }

    function afficheTableau($tab) {
      echo '<pre>';
      print_r($tab);
      echo '</pre>';
      }

      afficheTableau($_COOKIE);
 ?>
</article>

</body>
</html>
