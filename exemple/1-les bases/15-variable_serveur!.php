
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" /> <meta charset="utf-8">
<title>PHP-1-Les variables serveur</title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="14-librairie.php"> 14 Librairie</a>
        <a href="15-variable_serveur!.php"> 15 variable serveur</a>
        <a href="16-les-boucles.php"> 16 boucles</a>
    </nav>

</header>


<article>


<?php
echo 'PHP_SELF : '.$_SERVER['PHP_SELF'].' <br />différente des de la constante ___FILE___ : <br />';
echo __FILE__ ;

echo '<br /> SERVEUR_NAME : ';
echo $_SERVER['SERVER_NAME'];


echo '<br /> HTTP_USER_AGENT : ';
echo $_SERVER['HTTP_USER_AGENT'];

echo '<br /> REQUEST_URI  : ';
echo $_SERVER['REQUEST_URI'].'<br />';
echo $_SERVER['HTTP_REFERER'];
?>
</article>

</body>
</html>
