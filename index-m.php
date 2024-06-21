<html>
<head>
<meta charset="utf-8">
<title>Login Medecin</title>

    <!-- Bootstrap core CSS -->

    <!-- Favicons -->
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <link href="style/bootstrap.css" rel="stylesheet">

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

      .error {
        color: red;
        margin-top: 10px;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="style/style.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <header>
      <div><h1 class="h3 mb-3 fw-normal">Login Medecin</h1></div>
    <nav>

    </nav>

</header>
<article>

<h3>Connexion</h3>
 <form name="form1" method="post" action="pages/traitementloginm.php">

    <div class="form-floating">

   <input type="text" name="login" id="login" required autofocus
   placeholder="Login medecin" maxlength="40" class="form-control"/>
   <label for="login">Login</label>
   </div>
   <div class="form-floating">

   <input type="password" name="password" id="password" required autofocus
   placeholder="Password medecin" maxlength="50" class="form-control"/>
   <label for="password">Password</label>

   <?php
        if (isset($_GET['error']) && $_GET['error'] === 'error') {
            echo '<div class="error">Mot de passe incorrect</div>';
        }
        ?>

   <input class="w-100 btn btn-lg btn-primary" type="submit" name="Submit" value="Ok" />

 </form>

</article>
</main>
</body>
</html>
