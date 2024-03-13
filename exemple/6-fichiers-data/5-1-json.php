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
      <a href="5-json.php">Ecrire un JSON</a>
      <a href="5-1-json.php">JSON Decode</a>
      <a href="6-json.php">Ajax</a>
    </nav>

</header>
<article>
  <?php

  $php_array = array("zero","one","two");
  //returns ["zero","one","two"]
  $str_json_format = json_encode($php_array);
  echo "JSON Formatted String:" . $str_json_format;
  //returns {"0":"zero","1":"one","2":"two"}
  $obj_json_format = json_encode($php_array, JSON_FORCE_OBJECT);
  echo "<br/>JSON Object:" . $obj_json_format;
  //returns [ "zero", "one", "two" ]
  $strJsonFormat_with_space = json_encode($php_array, JSON_PRETTY_PRINT);
  echo "<br/>JSON Formatted String with white space:" . $strJsonFormat_with_space;

  $str_jsonArray_decoded = json_decode($obj_json_format,true);
  echo "<br/>Resultant decoded array data from JSON object:<br/>";
  echo "<PRE>";
  print_r($str_jsonArray_decoded);
  echo "</PRE>";

  ?>
<br />
</article>
</body>
</html>
