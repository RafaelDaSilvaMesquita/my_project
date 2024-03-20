<html>
<head>
<meta name="author" content="Rafael Da Silva" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
crossorigin="anonymous">

<link href="style.css" rel="stylesheet" type="text/css" media="all">

<title>Création</title>
</head>
<body class="bg-light">

  <div class="container">
    <div class="py-5 text-center">

      <h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
               <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
            </svg>
            Création du patient
      </h2>
      <p class="lead">Insérer les informations du patient</p>

    </div>
  </div>

  <div class="container">
    <h4 class="mb-3">Compléter les informations</h4>
    <form name="form1" method="post" action="traitement-newp.php">
      <div class="row g-3">
        <div class="col-sm-6">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" name="nom" id="nom" class="form-control" 
          required autofocus maxlength="120"/>
        </div>

        <div class="col-sm-6">
          <label for="prenom" class="form-label">Prenom</label>
          <input type="text" name="prenom" id="prenom" class="form-control"
          required autofocus maxlength="120">
        </div>

        <div class="col-2">
          <label for="date_naissance" class="form-label">Date de naissance</label>
          <input type="date" name="date_naissance" id="date_naissance" class="form-control"
          required>
        </div>

        <div class="col-12">
          <label for="genre" class="form-label">Genre</label><br />
          <input type="radio" name="genre" value="0">Féminin<br />
          <input type="radio" name="genre" value="1">Masculin<br />
        </div>

        <div class="col-3">
          <label for="login"class="form-label">Login patient</label>
          <input type="text" name="login" id="login" class="form-control" 
          required autofocus maxlength="40">
        </div>

        <div class="row g-3">
          <div class="col-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control" 
            required maxlength="50">
          </div>
        </div>

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