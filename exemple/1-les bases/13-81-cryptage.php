
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" /> 
<meta charset="utf-8">
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-1-Les fonctions Hashage</title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="13-7-fonctionsDate.php"> 13 Ft Date</a>
        <a href="#"> 13 Ft Hashage</a>
        <a href="14-librairie.php"> 14 Librairie</a>
    </nav>
</header>

<article>
  <?php
  //echo "Value of SODIUM_LIBRARY_VERSION =".SODIUM_LIBRARY_VERSION."<br />";
  function encrypt($key, $payload) {
  $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
  $encrypted = openssl_encrypt($payload, 'aes-256-cbc', $key, 0, $iv);
                  //datas à chiffrer, method, clé, option, vecteur ini
  return base64_encode($encrypted . '::' . $iv);
  }
 // Décryptage
 function decrypt($key, $garble) {
    list($encrypted_data, $iv) = explode('::', base64_decode($garble), 2);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv);
  }
  $key = "le code secret";
  $payload="le mot à cacher";

  $garble= encrypt($key, $payload);
  echo $garble."<br />";
  $clair= decrypt($key, $garble);
  echo $clair;

?>


</article>


</body>
</html>
