<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<meta charset="utf-8">
<title>PHP-6-Datas texte</title>
</head>
<body>
<header>
      <div><h1>PHP-6-Datas texte</h1></div>
    <nav>
      <a href="index.php">Datas</a>
      <a href="1-xml.php">Lire un XML</a>
      <a href="2-xml.php">Ecrire un XML</a>
      <a href="3-xml.php">Ecrire un autre  XML</a>
    </nav>

</header>
<article>
<?php

$fichier = 'datas.xml';
$xml = simplexml_load_file($fichier);
foreach($xml as $personne){
	echo '<strong>'.$personne->nom.' </strong> profil :
  <mark class="starwars">'.$personne->type.'</mark><br />'."\n";
}
?>
</article>
</body>
</html>
