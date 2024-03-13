<?php
setcookie("moncook","essai1",time()+500); // 500 sec
setcookie("moncook2","essai2"); // cookie de session
setcookie("langue","en"); // cookie de session
?>
<html>
<head>
  <link href="style.css" rel="stylesheet" media="all">
  <meta name="author" content="Stephane Brunet" />
  <link rel="icon" type="image/svg+xml" href="php.svg">
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


 Ecrire des Cookies <br />

<a href="2-lire-cookies.php" ><img src="cookie.svg" /> </a>
</article>

</body>
</html>
