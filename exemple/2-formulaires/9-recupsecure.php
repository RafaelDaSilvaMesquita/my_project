<html>

<head>
  <title> 2- Formulaires </title>
  <meta charset="utf-8">
</head>

<body>

  Recupération des variables à l'aide de post <br />
  <?php
  const SALT = "#__78hHjJ";
  if (isset($_POST['login']) && isset($_POST['pass'])) {
    $login = strip_tags($_POST['login']);
    $pass = strip_tags($_POST['pass']);
    $pass = sha1($pass . SALT);

    if ($login == "toto" && $pass != sha1('123' . SALT)) {
      echo "wrong pass";
    } elseif ($login == "toto" && $pass == sha1('123' . SALT)) {
      echo "bienvenue "; // ouverture de session
    } else {
      sleep(2);
      header('Location: 8-formlogin.html?essai=1');
    }
  } else {
    //arrive direct sur la page interdit
    header('Location: https://perdu.com');
  }

  if ($_SERVER['HTTP_REFERER'] != "http://127.0.0.1:8080/edsa-phh/2-formulaires/8-formlogin.html" && $_SERVER['HTTP_REFERER'] != "http://127.0.0.1:8080/edsa-phh/2-formulaires/8-formlogin.html?essai=1") {
    header('Location: https://perdu.com');
  }

  ?>

</body>

</html>