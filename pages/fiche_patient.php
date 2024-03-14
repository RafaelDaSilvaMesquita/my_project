<?php
include("../connexion.php");
session_start();
$id=$_SESSION['patient_id'];



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
            Fiche patient
         </h2>
         <p class="lead">Vos informations personnels et vos rendez-vous</p>
         <a class="lead" href="liste-rdvp.php">Liste des rendez-vous<a>

      </div>
   </div>
      
   <div class="container">
      <h4 class="mb-3">Compléter les informations</h4>
      <form name="form1" method="post" action="traitement_fichep.php">
         <div class="row g-3">
            <div class="col-sm-6">
               <label for="nom" class="form-label">Nom</label>
               <input type="text" name="nom" id="nom" class="form-control" autofocus
               maxlength="120" value="<?php echo $donnees->nom; ?>" readonly/>
            </div>
         
            <div class="col-sm-6">
               <label for="prenom" class="form-label">Prenom</label>
               <input type="text" name="prenom" id="prenom" class="form-control" autofocus
               maxlength="120" value="<?php echo $donnees->prenom; ?>" readonly>
            </div>
         
            <div class="col-2">         
               <label for="date_naissance" class="form-label">Date de naissance</label>
               <input type="date" name="date_naissance" id="date_naissance" class="form-control" autofocus
               value="<?php echo $donnees->date_naissance; ?>" readonly>
            </div>
         
            <div class="col-12"> 
               <label for="genre" class="form-label">Genre : </label>
               <?php if($donnees->genre==0) {echo 'féminin';} else {echo 'masculin';} ?>
            </div>
          
            <div class="col-md-5">
               <label for="adresse" class="form-label">Adresse</label>
               <input type="text" name="adresse" id="adresse" class="form-control" autofocus
               maxlength="120" value="<?php echo html_entity_decode($donnees->adresse); ?>">
            </div>
         
            <div class="col-md-3">
               <label for="code_postal" class="form-label">Code postal</label>
               <input type="text" name="code_postal" id="code_postal" class="form-control" autofocus
               maxlength="5" value="<?php echo $donnees->code_postal; ?>">
            </div>
         
            <div class="col-md-4">
               <label for="ville" class="form-label">Ville</label>
               <input type="text" name="ville" id="ville" class="form-control" autofocus
               maxlength="120" value="<?php echo html_entity_decode($donnees->ville); ?>">
            </div>
         
            <div class="col-2">
               <label for="numero_telephone" class="form-label">Numero de telephone</label>
               <input type="text" name="numero_telephone" id="numero_telephone" class="form-control" autofocus
               maxlength="15" value="<?php echo $donnees->numero_telephone; ?>">
            </div>
         
            <div class="row g-3">
               <div class="col-6">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" name="email" id="email" class="form-control" autofocus
                  maxlength="120" value="<?php echo $donnees->email; ?>">
               </div>
            </div>
         
            <label for="texte_medecin" class="form-label">Commentaire</label>
            <textarea name="texte_medecin" id="texte_medecin" class="form-control" autofocus
            value="<?php echo html_entity_decode($donnees->texte_medecin); ?>"></textarea>

            <div class="col-1">
               <input type="submit" name="Submit" value="Ok" 
               class="btn btn-primary btn-lg btn-block"/>
            </div>
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