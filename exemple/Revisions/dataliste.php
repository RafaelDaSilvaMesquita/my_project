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
Afficher la liste pseudo  des acteurs sous forme de datalist

<p>
  <label for="form_question">Acteur  </label>
  <input type="text" id="acteurs" name="acteurs"
  list="list-acteur"/>
    <datalist id="list-acteur">
      <?php
      while($donnees = mysqli_fetch_assoc($resultat))
      {
        echo'<option value="'.$donnees['pseudo'].'">'."\n";
      }
      mysqli_free_result($resultat);
      ?>
    </datalist>
</p>
</article>
</body>
 </html>
