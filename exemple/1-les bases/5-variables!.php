<html>
<head>

<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<meta charset="utf-8">
<title> PHP-1-Les variables </title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="7-concatenation.php"> 4  variables</a>
        <a href="5-variables!.php"> 5 variable !</a>
        <a href="6-constantes.php"> 6 constantes</a>
    </nav>
</header>
  <article>

    <?php
    $code_formation='win';
    $code_formation=3;
    $code_formation='php';
    echo $code_formation."<br />";
    echo gettype($code_formation)."<br />";
    var_dump(is_string($code_formation));
    ?>
<br /><br />
<pre>
  var_dump() affiche les informations structur&eacute;es d'une variable, y compris son type et sa valeur.
</pre>
  <?php
  $etage="<script>";
  $etage=(float)$etage;

  echo gettype($etage);

  echo $etage.'<br />';
  echo gettype((string)$etage);
  ?>
</article>

</body>
</html>
