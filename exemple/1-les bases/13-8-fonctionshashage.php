<html>

<head>
  <link href="style.css" rel="stylesheet" media="all">
  <meta name="author" content="Stephane Brunet" />
  <link rel="icon" type="image/svg+xml" href="php.svg">
  <meta charset="utf-8">
  <title>PHP-1-Les fonctions Hashage</title>
</head>

<body>
  <header>
    <div>
      <h1>PHP-1-Les bases</h1>
    </div>
    <nav>
      <a href="13-7-fonctionsDate.php"> 13 Ft Date</a>
      <a href="#"> 13 Ft Hashage</a>
      <a href="14-librairie.php"> 14 Librairie</a>
    </nav>

  </header>

  <article>
    <?php
    $donnee = 'secretXzB';
    // echo $donnee .'<br />';
    $md5 = md5($donnee);
    echo 'MD5 : ' . $md5;
    echo '<br />';
    ?>
    <?php
    $donnee = 'secretXzB';
    $sha1 = sha1($donnee);
    echo 'sha1 : ' . $sha1;
    echo '<br />';

    ?>
    <?php
    $donnee = 'secretXzB';
    $salt = 'salt';
    $donnee = $donnee . $salt;
    $sha512 = hash('sha512', $donnee);
    echo 'sha512 : ' . $sha512;
    echo '<br />';

    echo '<pre>';
    print_r(hash_algos());
    echo '</pre>';

    //php8.2
    
    echo '<br />';
    // Hash the string with truncated SHA-256 using binary output
// to turn the $string into a 128 Bit seed. Using the same
// string will result in the same sequence of randomness.
    $e = new \Random\Engine\PcgOneseq128XslRr64(
      substr(hash('sha256', $pwd, binary: true), 0, 16)
    );

    echo bin2hex($e->generate()), "\n";

    $ph = password_hash($donnee, PASSWORD_DEFAULT);
    $ph2 = password_hash($donnee, PASSWORD_DEFAULT);
    //$ph= password_hash($donnee, PASSWORD_BCRYPT);
    echo 'password_hash :' . $ph . '<br />';
    echo 'password_hash :' . $ph2 . '<br />';

    if (password_verify($donnee, $ph)) {
      echo 'Le mot de passe est valide !';
    } else {
      echo 'Le mot de passe est invalide.';
    }

    // php 7.4
    echo '<pre>';
    print_r(password_algos());
    echo '</pre>';

    $pwd = "mot de passe secret";
    echo 'argon2i : ' . password_hash($pwd, PASSWORD_ARGON2I) . "\n";
    echo 'argon2id : ' . password_hash($pwd, PASSWORD_ARGON2ID) . "\n";

    $options = ['memory_cost' => 1 << 11, 'time_cost' => 4, 'threads' => 2];

    //Un coût de mémoire qui définit le nombre de KiB à consommer pendant le hachage (les valeurs par défaut sont 1<10, ou 1024 KiB, ou 1 MiB).
    //Un coût en temps qui définit le nombre d’itérations de l’algorithme de hachage (par défaut : 2)
    //Un facteur de parallélisme, qui définit le nombre de threads parallèles qui seront utilisés pendant le hachage (valeur par défaut : 2).
    $hacher = password_hash($pwd, PASSWORD_ARGON2ID, $options);
    echo 'argon2id  param: ' . $hacher;

    if (password_verify('mot de passe secret', $hacher)) {
      echo 'Le mot de passe est valide !';
    } else {
      echo 'Le mot de passe est invalide.';
    }

    ?>



  </article>


</body>

</html>