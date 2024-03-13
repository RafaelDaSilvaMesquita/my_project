<?php

if( isset( $_POST['texte'] ) )
$texte = $_POST['texte'];
 else
$texte =null;
 if( isset( $_POST['film'] ) )
 $film = $_POST['film'];
 else
$film =null;

if( isset( $_POST['acteur'] ) )
 $acteur = $_POST['acteur'];
 else
$acteur =null;

include("1-connexion.php");

$sql = "INSERT INTO repliques VALUES ('', '$texte', $film, $acteur )";
mysqli_query($bdd, $sql);
?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<title>PHP-5-base de données</title>
</head>
<body>
<header>
    <div><h1>PHP-5-BDD</h1></div>
    <nav>
        <a href="3-insert.php">3 insert</a>
        <a href="4-insert-from-form.php">4 insert form</a>
        <a href="5-insert-citation!.php">5 citation form </a>
    </nav>

</header>
<article>
<?php
if( isset( $_POST['texte'] ) )
$texte = printf ("Le nouvel enregistrement a été ajouté");
 else
echo "erreur";


?>
</article>
</body>
</html>
