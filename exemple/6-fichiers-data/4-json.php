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
      <a href="3-xml.php">Ecrire un autre  XML</a>
      <a href="4-json.php">Lire un JSON</a>
      <a href="5-json.php">Ecrire un JSON</a>
    </nav>

</header>
<article>
  <?php

      $json1 = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
      echo '<pre>';
      print_r(json_decode($json1));
      echo '</pre>';
      var_dump(json_decode($json1, true));// true:retourne un tableau associatif false : un object
      echo '<br />';

      $string='{"name":"John Doe", "city":"New York"}';
      $json_array=json_decode($string,true);
      echo $json_array['name'];

      echo '<br />';
      $json2 = file_get_contents('city.js');
      $data = json_decode($json2, true);
      // echo '<pre>';
      // print_r($data);
      // echo '</pre>';
      echo $data[3]['cityName'];
  ?>
<br />
</article>
</body>
</html>
