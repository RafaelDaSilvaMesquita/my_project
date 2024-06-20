<?php
include '../connexion.php';
$id=$_GET['id']??1;
$id=(int)$id;

$requete = "SELECT nom, prenom, patient_id
FROM patient
WHERE patient_id=$id";
$resultats=$bdd->query($requete);

$requete2 = "SELECT nom, prenom, medecin_id
FROM medecin
ORDER BY nom ASC";
$resultats2=$bdd->query($requete2);

$donnees = $resultats->fetch(PDO::FETCH_OBJ);
?>

<html>
<head>
<meta name="author" content="Rafael Da Silva">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
crossorigin="anonymous">

<link href="style.css" rel="stylesheet" type="text/css" media="all">
<link rel="icon" type="image/svg+xml" href="php.svg">

<title>Affectation</title>
</head>
<body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">

        <h2>
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
          </svg>
          Affectation des patients
        </h2>
      </div>
    </div>

    <div class="container">
      <h4 class="mb-3">Procéder à l'affectation</h4>
      <form name="form1" method="POST" action="traitement-affectation.php">
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="patient" class="form-label">Pour le patient : </label>
            <?php echo $donnees->nom.' '. $donnees->prenom;?>
          </div>

          <div class="row g-3">
            <div class="col-md-4">
              <label for="medecin" class="form-label">Choisir quel médecin lui affecté : </label>
              <select name="medecin_id" class="form-control">
                <option value="0" selected=selected>Choisir</option>
                <?php while( $donnees2 = $resultats2->fetch(PDO::FETCH_OBJ))
                //var_dump($donnees);
                {
                  echo '<option value="'.$donnees2->medecin_id.'">'.$donnees2->nom.' '.$donnees2->prenom.'</option>'."\n";
                } ?>
                </select><br />
            </div>
          </div>

          <div class="col-1">
            <input type="submit" name="Submit" value="Ok" 
            class="btn btn-primary btn-lg btn-block"/>
            <input name="patient_id" type="hidden" value="<?php echo $id;?>"/>
          </div>

        </div>

      </form>
    </div>
</body>
</html>



<!--<article>
    <p>Pour le patient : <?php echo $donnees->nom.' '. $donnees->prenom;?></p>
    <p>Choisir quel médecin lui affecté : </p>
    <form method="POST" action="traitement-affectation.php">
    <select name="medecin_id">
        <option value="0" selected=selected>Choisir</option>
        <?php while( $donnees2 = $resultats2->fetch(PDO::FETCH_OBJ))
//var_dump($donnees);
  {
    echo '<option value="'.$donnees2->medecin_id.'">'.$donnees2->nom.' '.$donnees2->prenom.'</option>'."\n";
  } ?>
    </select><br /><br />
    <input type="submit" value="Envoyer"/>
    <input name="patient_id" type="hidden" value="<?php echo $id;?>"/>
</form>
</article>-->

