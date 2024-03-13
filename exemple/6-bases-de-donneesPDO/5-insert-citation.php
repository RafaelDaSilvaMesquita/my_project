<?php
require("1-connexion.php");

$requete = "SELECT titre, id
        FROM film
        ORDER BY titre";
$films = $bdd->query($requete);
//echo $sql;

$requete2 = "SELECT pseudo, id
         FROM auteur
         ORDER BY pseudo";
$auteurs = $bdd->query($requete2);
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
    <div>
      <h1>PHP-5-BDD</h1>
    </div>
    <nav>
      <a href="4-insert-from-form.php">4 insert form</a>
      <a href="5-insert-citation!.php">5 citation form </a>
      <a href="6-traitement-citation.php">6 traitement</a>
    </nav>

  </header>
  <article>
    <form id="form1" name="form1" method="post" action="6-traitement-citation.php">
      <p>
        <label for="films">Film </label>
        <select name="films" id="films">
          <option value="-1" selected="selected">Choisir</option>
          <!-- <option value="5">etiquette</option> -->
          <?php
          while ($donnees = $films->fetch(PDO::FETCH_OBJ)) {
            echo '<option value="' . $donnees->id . '">' . $donnees->titre . '</option>' . "\n";
          }
          ?>
        </select>
      </p>
      <p><label for="acteurs">Acteur </label>
        <select name="acteurs" id="acteurs">
          <option value="-1" selected="selected">Choisir</option>
          <?php
          while ($donnees = $auteurs->fetch(PDO::FETCH_OBJ)) {
            echo '<option value="' . $donnees->id . '">' . $donnees->pseudo . '</option>' . "\n";
          }
          ?>
        </select>
      </p>
      Citation : <textarea name="citation" cols="30" rows="3"></textarea>
      <input type="submit" name="button" id="button" value="Envoyer" />
    </form>
  </article>
</body>

</html>

<?php
$films->closeCursor();
$auteurs->closeCursor();
?>