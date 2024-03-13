
<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<meta charset="utf-8">
<title>PHP-2-post</title>
</head>
<body>
<header>
    <div><h1>PHP-2-formulaire</h1></div>
    <nav>
        <a href="4-form.html">4 formulaire </a>
		      <a href="5-recup.php">5 recup</a>
        <a href="6-file.html"> fichier </a>
    </nav>

</header>
<article>

 R&eacute;cup&eacute;ration des variables &agrave; l'aide de post <br />

<?php

 if( isset( $_POST['nom'] ) and $_POST['nom']!=NULL  )
 {$nom = htmlentities( $_POST['nom']);}
 else
 {$nom ="John Doe";}

 if( isset( $_POST['age']) and $_POST['age']!=NULL  )
  {$age = 'de '.(int)$_POST['age'].' ans';}
 else
  {$age ="inconnu";}

echo 'bonjour '.$nom.' ton age est '.$age ;
?>
</article>

</body>
</html>
