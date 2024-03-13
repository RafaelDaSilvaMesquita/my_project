<?php

include("1-connexion.php");

$sql = "SELECT titre, id FROM film ORDER BY titre"  ;
$films = mysqli_query($bdd, $sql);
//echo $sql;
$sql2 = "SELECT pseudo, id FROM auteur ORDER BY pseudo"  ;
$auteurs = mysqli_query($bdd, $sql2);
//echo $sql2;
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
        <a href="4-insert-from-form.php">4 insert form</a>
        <a href="5-insert-citation!.php">5 citation form </a>
        <a href="6-traitement-citation.php">6 traitement</a>
    </nav>

</header>
<article>
<form id="form1" name="form1" method="post" action="6-traitement-citation.php">
  <p>Film :

    <label for="films"></label>
    <select name="films" id="films">
      <option value="-1" selected="selected">Choisir</option>
	  <?php
	  while($donnees = mysqli_fetch_assoc($films))
        {
        $filmid=$donnees['id'];
        $filmtitre=$donnees['titre'];

        echo'<option value="'.$filmid.'">'.$filmtitre.'</option>'."\n";
        }
    ?>
    </select>
  </p>
  <p>Acteur :<label for="acteurs"></label>
    <select name="acteurs" id="acteurs">
      <option value="-1" selected="selected">Choisir</option>
      <?php
	  while($donnees = mysqli_fetch_assoc($auteurs))
          {
          $acteurid=$donnees['id'];
          $acteurpseudo=$donnees['pseudo'];

          echo'<option value="'.$acteurid.'">'.$acteurpseudo.'</option>'."\n\t";
          }
        ?>
    </select></p>
    Citation : <textarea name="citation" cols="30" rows="3"></textarea>
  <input type="submit" name="button" id="button" value="Envoyer" />
</form>
</article>
</body>
</html>

<?php
mysqli_free_result($films);
mysqli_free_result($auteurs);
?>
