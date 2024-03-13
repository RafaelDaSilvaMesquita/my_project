<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<meta charset="utf-8">
<title>PHP-5-base de données</title>
</head>
<body>
<header>
    <div><h1>PHP-5-BDD</h1></div>
    <nav>
        <a href="8-json.php">8 json</a>
		    <a href="9-json-encode.php">9 encode</a>
        <a href="10-xml.php">10 xml</a>
    </nav>

</header>
<article>
<?php

$fichier = 'datas.xml';
$xml = simplexml_load_file($fichier);
foreach($xml as $personne){
	echo '<strong>'.$personne->nom.' </strong> profil :
  <mark class="starwars">'.$personne->type.'</mark><br />';
}

?>
</article>
</body>
</html>
