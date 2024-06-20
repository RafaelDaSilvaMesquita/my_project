<?php
include("../connexion.php");
session_start();
$id=$_GET['id'];



$requete = "SELECT * FROM patient
WHERE patient_id = $id";
$resultats=$bdd->query($requete);
// echo $requete;
$donnees = $resultats->fetch(PDO::FETCH_OBJ)
?>

<html>
<head>
<meta name="author" content="Rafael Da Silva" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
crossorigin="anonymous">

<title>Fiche Patient</title>
</head>
<body class="bg-light">

  <div class="container">
    <div class="py-5 text-center">

      <h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
        </svg>
        Information sur le patient
      </h2>
      <a class="lead" href="liste-rdvm.php">Retour sur les rendez-vous<a>
   
    </div>
  </div>

<div class="container">
  <form name="form1" method="post" action="traitement_fichem.php">
    <div class="row g-3">
      <div class="col-sm-6">
        <label for="nom" class="form-label">Nom : </label>
        <?php echo $donnees->nom; ?>
      </div>

      <div class="col-sm-6">
        <label for="prenom" class="form-label">Prenom : </label>
        <?php echo $donnees->prenom; ?>
      </div>

      <div class="col-sm-6">
        <label for="date_naissance" class="form-label">Date de naissance : </label>
        <?php echo $donnees->date_naissance; ?>
      </div>
    
      <div class="col-sm-6">
        <label for="genre" class="form-label">Genre : </label>
        <?php if($donnees->genre==0) {echo 'féminin';} else {echo 'masculin';} ?>
      </div>

      <div class="col-sm-6">
        <label for="adresse" class="form-label">Adresse : </label>
        <?php echo html_entity_decode($donnees->adresse); ?>
      </div>
    
      <div class="col-sm-6">
        <label for="code_postal" class="form-label">Code postal : </label>
        <?php echo $donnees->code_postal; ?>
      </div>
    
      <div class="col-sm-6">
        <label for="ville" class="form-label">Ville : </label>
        <?php echo html_entity_decode($donnees->ville); ?>
      </div>
    
      <div class="col-sm-6">
        <label for="numero_telephone" class="form-label">Numero de telephone : </label>
        <?php echo $donnees->numero_telephone; ?>
      </div>

      <div class="col-sm-6">
        <label for="email" class="form-label">Email : </label>
        <?php echo $donnees->email; ?>
      </div>

      <div class="col-sm-6">
        <label for="texte_medecin" class="form-label">Commentaire : </label>
        <?php echo html_entity_decode($donnees->texte_medecin); ?>
      </div>

      <div class="col-sm-6">
        <label for="texte_medecin2" class="form-label">Mon commentaire</label>
        <textarea name="texte_medecin2" id="texte_medecin2" class="form-control" autofocus
        value="<?php echo html_entity_decode($donnees->texte_medecin2); ?>"></textarea>
      </div>

</br>
   
      <div class="col-1">
        <input type="submit" name="Submit" value="Ok"
        class="btn btn-primary btn-lg btn-block"/>
      </div>
      <a href="6-2captcha.php">S&eacute;curit&eacute;</a>
    </div>
  </form>
</div>


<!-- Popper.js first, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
   integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
   crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
   integrity="sha384-oesi62hOLfzrys4LxRF630JCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
   crossorigin="anonymous"></script>

  </body>
</html>