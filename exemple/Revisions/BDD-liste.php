<?php
include("connect.php");
$sql = "SELECT pseudo, nom FROM auteur ORDER BY pseudo";
//echo $sql;
$resultat = mysqli_query($bdd, $sql);
?>
<html>
<head>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<title>PHP-5-base de donn&eacute;es</title>
</head>
<body>
<header>
    <div><h1>PHP-5-BDD</h1></div>
    <nav>
      <?php
        include('nav.html');
      ?>
    </nav>

</header>
<article>
Afficher la liste pseudo et nom des acteurs
<?php

while($donnees = mysqli_fetch_assoc($resultat))
{
    echo $donnees['pseudo'].' '.$donnees['nom'].'<br />';
}
mysqli_free_result($resultat);

?>
</article>
</body>
 </html>
