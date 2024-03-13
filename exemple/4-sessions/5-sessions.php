<?php
session_start();
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
        <a href="6-serialisation!.php">6 serialisation !</a>
    </nav>

</header>
<article>
Lire des variables de session <br />

<?php
if(isset($_SESSION['prenom']) AND isset ($_SESSION['nom']))
{ echo $_SESSION['prenom'].' '. $_SESSION['nom']. ',
je suis ton p&egrave;re, '
.$_SESSION['prenom'] .'<br />'.session_id();
}

 echo '<br />'.$_COOKIE['PHPSESSID'];
 ?>
</article>

</body>
</html>
