<?php
require_once("session.php");
include("../connexion.php");

$sql = "SELECT id, quinte_annee, valeur, legende, coul
        FROM  resultats ORDER BY quinte_annee";
$resultats = $bdd->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <title>Projet : Back Office</title>
  <link href="../css/style-admin.css" rel="stylesheet">
  <link rel="icon" type="image/svg+xml" href="../images/bar-admin.svg">
  <style rel="stylesheet">
    .liste {
      font-family: courier;
    }

    h4 {
      text-align: right;
      padding-right: 10vw;
    }
  </style>
</head>

<body>
  <h2>Liste des resultats</h2>
  <h4><a href="Logout.php">Deconnexion</a> </h4>
  <section>
    <?php
    while ($donnees = $resultats->fetch(PDO::FETCH_OBJ)) {
      $id = $donnees->id;
      $coul = $donnees->coul;
      $legend = str_pad($donnees->legende, 10, "_");
      $valeur = str_pad($donnees->valeur, 7, "-");

      echo '<p class="liste"><strong>' . $donnees->quinte_annee . '</strong> | ' . $legend . ' | ' . $valeur . '
  	<a href="detail-modif.php?id=' . $id . '
    " style="background-color:rgb(' . $coul . ');text-shadow:1px 1px 1px white; --lien:rgb(' . $coul . ')"> Modifier </a></p>' . "\n";
      // <a href="detail_modif.php?id=1" style="background-color:rgb(255,25,66)">Modifier</a>"
    }
    $resultats->closeCursor();
    ?>
  </section>
</body>

</html>