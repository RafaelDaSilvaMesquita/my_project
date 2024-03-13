<?php
session_start();

if (!empty($_POST['profil'])) {
  if ($_POST['profil'] == "gentil") {
    $_SESSION['profil'] = 'anakin';
  } else {
    $_SESSION['profil'] = 'darth';
  }
}
$profil = $_SESSION['profil']??'';
?>

<html>

<head>
  <link href="style.css" rel="stylesheet" type="text/css" media="all">
  <meta name="author" content="Stephane Brunet" />
  <title>PHP-revisions</title>
  <link rel="icon" type="image/svg+xml" href="img/Rebel.svg">
  <meta charset="utf-8">
  <style rel="stylesheet">
    .cache {
      display: none;
    }

    .affiche {
      display: block;
    }
  </style>
</head>

<body>
  <header>
    <div>
      <h1>Chevalier </h1>
    </div>
    <?php
    include('nav.php');
    ?>
  </header>
  <article>
    Suivant le choix du formulaire je stocke en session et affiche l'image <br />
    d'Anakin ou de Darth Vador<br />

    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <p><label for="profil">Profil</label>
        <select name="profil">
          <option value="-1" selected>Choisir</option>
          <option value="obscure">Darth V</option>
          <option value="gentil">Anakin S</option>
        </select>
        <input type="submit" name="Submit" value="Ok">

    </form>
    <?php
    $profilcss = "";
    if (!empty($_SESSION['profil'])) {
      $profilcss = 'affiche';
    }
    ?>

    <section class="cache <?php echo $profilcss; ?> ">
      <img src="img/<?php echo $profil; ?>.jpg" width="200" />
    </section>

  </article>
</body>

</html>