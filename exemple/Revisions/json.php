<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<meta charset="utf-8">
<title>PHP-6-Datas texte</title>
</head>
<body>
<header>
      <div><h1>PHP-6-Datas texte</h1></div>
    <nav>
      <?php
        include('nav.html');
      ?>
    </nav>

</header>
<article>
  Afficher la deuxieme citation de tontons.js<br />
  <?php

      $json = file_get_contents('tontons.js');
      $data = json_decode($json, true);
      //var_dump($data);

      echo $data['quote2'];

  ?>
<br />
</article>
</body>
</html>
