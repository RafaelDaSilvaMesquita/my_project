
<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<meta charset="utf-8">
<title>PHP-2-get</title>
</head>
<body>
<header>
    <div><h1>PHP-2-formulaire</h1></div>
    <nav>
        <a href="2-getsecure!.php">2 get secure </a>
		<a href="3-getsecureII!.php">3 get secure II</a>
        <a href="4-form.html"> Post </a>
    </nav>

</header>
<article>




 Recupération des variables à l'aide de Get <br />

<a href="3-getsecureII!.php?name=luke&amp;age=33">3-getsecureII.php?name=luke&amp;age=33</a>
<?php
if (isset($_GET['name']) AND isset($_GET['age']))
  {
  $age = (int)$_GET['age'];
  if ($age<=0 || $age>120){ die('tricheur');}

  $name=htmlentities($_GET['name']);
  echo 'Bonjour ' . $name . ' déjà  ' . $age . ' ans !';
  }
else {
  echo 'Il manque des valeurs !';
  }
?>

</article>
</body>
</html>
