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
      <a href="4-json.php">Lire un JSON</a>
      <a href="5-json.php">Ecrire un JSON</a>
      <a href="5-1-json.php">JSON Decode</a>
    </nav>

</header>
<article>
  <?php

      $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
      //echo '<pre>';
      print_r(json_decode($json));
      echo '</pre>';
      var_dump(json_decode($json, true));
      echo '<br />';
      $string='{"name":"John Doe", "city":"New York"}';
      $json_a=json_decode($string,true);
      echo $json_a['name'];

      echo '<br />';
      $json = file_get_contents('city.js');
      $ville = json_decode($json, true);
      echo '<pre>';
      //print_r($data);
      echo '</pre>';
      echo $ville[2]['cityName'];

  ?>
<br />
</article>
</body>
</html>
