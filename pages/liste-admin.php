<?php
include("../connexion.php");

$requete = "SELECT nom, prenom, status, patient_id
FROM patient
WHERE status<3
ORDER BY nom ASC";
$resultats=$bdd->query($requete);

$requete2 = "SELECT nom, prenom, medecin_id
FROM medecin
ORDER BY nom ASC";
$resultats2=$bdd->query($requete2);
?>

<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Rafael Da Silva" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>Configuration</title>
<link href="style.css" rel="stylesheet" media="all">
<link href="../style/bootstrap.css" rel="stylesheet">
<link href="../style/stylein.css" rel="stylesheet">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }
  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  .btn-light-custom {
    background-color: white;
    color: black;
    border: 1px solid #ced4da;
  }

</style>
</head>
<body>
<header class="p-3 mb-3 border-bottom">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <h1 class="h3 me-3">Configuration</h1>
        <nav class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <a href="creation-newp.php" class="btn btn-light-custom me-2 mb-2">Nouveau patient</a>
          <a href="creation-newm.php" class="btn btn-light-custom mb-2">Nouveau médecin</a>
        </nav>
      </div>
    </div>
</header>
<main class="container">
  <section>
    <h2>Liste des patients</h2>
    <div class="list-group">

    <?php
    // afficher les résultats de la base
    while( $donnees = $resultats->fetch(PDO::FETCH_OBJ))
    //var_dump($donnees);
      {  $dispo=$dispo='<a href="traitement-liberation.php?id='.$donnees->patient_id.'" class="btn btn-warning btn-sm">Changement de médecin</a>';
        /*if($donnees->status==0){$dispo='<a href="affectation.php?id='.$donnees->patient_id.'">Affecté à un médecin</a>';}
        echo '<p>';
        echo $donnees->nom.' '.$donnees->prenom.' '.$dispo.' <a href="softdelete.php?id='.$donnees->patient_id.'">Masqué patient</a><br />'."\n";
        echo '</p>';*/
        if ($donnees->status == 0) {
          $dispo = '<a href="affectation.php?id='.$donnees->patient_id.'" class="btn btn-primary btn-sm">Affecté à un médecin</a>';
        }
        echo '<div class="list-group-item">';
        echo '<h5 class="mb-1">'.$donnees->nom.' '.$donnees->prenom.'</h5>';
        echo '<div>'.$dispo.' <a href="softdelete.php?id='.$donnees->patient_id.'" class="btn btn-danger btn-sm">Masquer patient</a></div>';
        echo '</div>';
      }
    $resultats->closeCursor();
    ?>
    </div>
  </section>
<!--<a href="creation-newp.php">Nouveau patient</a>
    
<div><h1>Liste des médecins</h1></div>-->

  <section class="mt-4">
    <h2>Liste des médecins</h2>
    <div class="list-group">
    
    <?php
    // afficher les résultats de la base
    while( $donnees = $resultats2->fetch(PDO::FETCH_OBJ))
    //var_dump($donnees);
      {
        /*echo '<p>';
        echo $donnees->nom.' '.$donnees->prenom.'<br />'."\n";
        echo '</p>';*/
        echo '<div class="list-group-item">';
        echo '<h5 class="mb-1">'.$donnees->nom.' '.$donnees->prenom.'</h5>';
        echo '</div>';
      }
    $resultats->closeCursor();
    ?>
    </div>
  </section>

<!--<a href="creation-newm.php">Nouveau médecin</a>-->

</main>
</body>
</html>