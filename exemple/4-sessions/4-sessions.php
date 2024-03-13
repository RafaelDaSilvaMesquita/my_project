<?php
session_cache_expire(30);/* Configure le délai d'expiration à 30 minutes */
session_start();

$_SESSION['prenom'] = 'Luke';
$_SESSION['nom'] = 'Skywalker';
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
        <a href="3-cookies-secure.php">3 cookie secure </a>
        <a href="4-sessions.php">4 sessions</a>
        <a href="5-sessions.php">5 lire sessions</a>
        <a href="6-serialisation!.php">6 serialisation !</a>
    </nav>

</header>
<article>
Creer des variables de session <br />


</article>

</body>
</html>
