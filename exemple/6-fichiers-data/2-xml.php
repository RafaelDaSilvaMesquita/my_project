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
      <a href="index.php">Datas</a>
      <a href="1-xml.php">Lire un XML</a>
      <a href="2-xml.php">Ecrire un XML</a>
      <a href="3-xml.php">Ecrire un autre  XML</a>
    </nav>

</header>
<article>
<?php
   $xml = '<?xml version="1.0" encoding="UTF-8"?>';
   $xml .= '<items>';
   $xml .= 'contenu de la balise';
   $xml .= '</items>';
   echo $xml;
?>

<?php
$languages = array ('PHP', '.net', 'Python', 'JSP', 'Ruby');

$xml = '<?xml version="1.0" encoding="UTF-8"?><items>';
foreach($languages as $id=>$element)
 {
   $xml .= "\n".'<item id="'.$id.'">'.$element . '</item>'; // affichera $language[0], $language[1] ...
 }
$xml .="\n".'</items>';
//echo $xml;
file_put_contents('language.xml', $xml,  LOCK_EX);
?>
<br />
</article>
</body>
</html>
