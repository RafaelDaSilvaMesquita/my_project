<?php
//avant php 8.1
setcookie("moncook","essaisecure",time()+500*3600, null, null, false, true);
//après php 8.1
$arr_cookie_options = array (
  'expires' => time() + 60*60*24*30, 
  'path' => '/', 
  'domain' => '.127.0.0.1', // leading dot for compatibility or use subdomain
  'secure' => true,     // or false
  'httponly' => true,    // or false
  'samesite' => 'None' // None || Lax  || Strict
  );
setcookie('moncook', 'essaisecure', $arr_cookie_options);    
// (nom du cookie/valeur/durée de vie/sous-repertoire/sous-domaine/https/http-only)

?>
<html>
<head>
  <link href="style.css" rel="stylesheet" media="all">
  <meta name="author" content="Stephane Brunet" />
  <link rel="icon" type="image/svg+xml" href="php.svg">
  <title>PHP-4-sessions</title>
  <meta charset="utf-8">
</head>
<body>
<header>
    <div><h1>PHP-4-Session</h1></div>
    <nav>
        <a href="2-lire-cookies.php">2 lire un cookie</a>
        <a href="3-cookies-secure.php">3 cookie secure </a>
        <a href="4-sessions.php">4 sessions</a>
    </nav>

</header>
<article>


 Ecrire des Cookies <br />

<a href="2-lire-cookies.php" ><img src="http://mediaaetas.com/wp-content/uploads/2013/07/cookies.gif" tiltle="miam" /> </a>
</article>

</body>
</html>
