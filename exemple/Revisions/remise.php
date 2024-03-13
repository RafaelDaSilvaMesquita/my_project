<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Remise</title>
  <meta name="author" content="Stephane Brunet" />
  <link rel="icon" type="image/svg+xml" href="php.svg">
  <style media="screen">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

    body {
      font-family: 'Poppins', sans-serif;
    }

    mark {
      color: orangered;
      background-color: transparent;
    }

    mark:nth-of-type(2n+1) {
      background-color: Lavender;
    }

    .deux {
      font-weight: bold;
      color: DarkOrange;
      background-color: Lavender;
    }

    p {
      color: teal;
    }
  </style>
</head>

<body>
  Effectuer une suite de tirages de 3 nombres aléatoires (0 à 1000) <br />
  jusqu’à obtenir une suite composée d'un nombre pair suivi de deux<br />
  nombres impairs.<br />
  <?php
  $compteur = 0;
  do {
    $valeur1 = rand(0, 1000);
    $valeur2 = rand(0, 1000);
    $valeur3 = rand(0, 1000);
    $compteur++;
    echo "<mark>" . $valeur1 . " ," . $valeur2 . " ," . $valeur3 . "</mark><br /> \n";
  }
  while (($valeur1 % 2 == 1) || ($valeur2 % 2 == 0) || ($valeur3 % 2 == 0));
  echo "Résultat obtenu en $compteur coups";
  ?>
  <br />
  <p>Sur un montant variables <br />
    si le montant inférieur a 2000 ne pas appliquer de remise<br />
    si le montant inférieur a 5000 appliquer 1% de remise<br />
    au delà appliquer 2% de remise<br />
    ecrire un formulaire pour une conversion en $ ou en £
    et refaire le calcul</p>
  <?php
  $montant = 3000;
  echo "montant brut : <mark class=\"deux\">" . $montant . "€</mark><br />";
  if ($montant < 2000) {
    $taux = 0;
  } else if ($montant <= 5000) {
    $taux = 1;
  } else {
    $taux = 2;
  }
  $remise = $montant * $taux / 100;
  $montant = $montant - $remise;
  echo "montant après remise : <mark class=\"deux\">" . $montant . "€</mark><br />";
  ?>


  <form method="post" action="<?php echo ($_SERVER['PHP_SELF']); ?>">
    <label for="conversion">Taux de conversion</label>
    <input type="number" name="conversion" value="<?php if (isset($_POST['conversion'])) {
      echo (float) $_POST['conversion']; } ?>" 
      id="conversion" required placeholder="Saisir un tx conversion" required step="any" />
    <select name="monnaie">
      <option selected value="-1">Choisir</option>
      <option value="$">Dollard</option>
      <option value="£">Pound</option>
    </select>
    <input type="submit" name="Go">
  </form>
  <?php
  if (isset($_POST['conversion']) and ($_POST['monnaie'] != -1)) {
    $tx = (float) $_POST['conversion'];
    echo "montant après remise en " . $_POST['monnaie'] . " : <mark class=\"deux\">" . $montant * $tx . $_POST['monnaie'] . "</mark><br />";
  } else {
    echo "<mark class=\"deux\">merci de renseigner le form</mark>";
  }

  echo $_SERVER['SCRIPT_NAME'].'<br />';
  echo $_SERVER['PHP_SELF'];
  ?>


</body>

</html>