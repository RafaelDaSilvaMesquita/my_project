<?php

include("1-connexion.php");

$requete = "INSERT INTO repliques
VALUES (NULL, 'Les cons, ça ose tout!
C''est même à ça qu''on les reconnait.', 1, 1 )";

$bdd->query($requete);
?>

<html>
<head>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-5-base de données</title>
</head>
<body>
<header>
    <div><h1>PHP-5-BDD</h1></div>
    <nav>
        <a href="2-liste.php">2 liste </a>
        <a href="3-insert.php">3 insert</a>
        <a href="4-insert-from-form.php">4 insert form</a>
    </nav>

</header>
<article>
<?php
print ("Le nouvel enregistrement a été ajouté");

?>
</article>
</body>
</html>
