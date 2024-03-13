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
      <a href="1-xml.php">Lire un XML</a>
      <a href="2-xml.php">Ecrire un XML</a>
      <a href="3-xml.php">Ecrire un autre  XML</a>
      <a href="4-json.php">Lire un JSON</a>
    </nav>

</header>
<article>
  <?php
     $xml = new DOMDocument('1.0', 'utf-8');
     $tag = $xml->createElement('items','contenu de la balise');
     $xml->appendChild($tag);
     echo $xml->saveXML();
  ?>

<?php
    $languages = array ('Best' => 'PHP', 'MS' => '.net', 'Petit' =>  'Python', 'lourd' => 'JSP', 'outsider' => 'Ruby');
  function arrayToXml($array, $rootElement = null, $xml = null) {
  $_xml = $xml;

  if ($_xml === null) {
    $_xml = new SimpleXMLElement($rootElement !== null ?
    $rootElement : '<root/>');
  }
  foreach ($array as $key => $value) {
    if (is_array($value)) { //nested array
      arrayToXml($value, $key, $_xml->addChild($key));
    } else {
      $_xml->addChild($key, $value);
    }
  }
  return $_xml->asXML();
}
echo arrayToXml($languages);

function rand_color() {
    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
};
$couleur=rand_color()
?>
<br />
<svg width="256px" height="256px" preserveAspectRatio="xMidYMid" version="1.1" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
 <title>renovate</title>
 <circle cx="128" cy="128" r="128" fill="#497c9b"/>
 <path d="m178.21 70.861 14.609 14.609c4.87 4.869 4.87 11.826 0 16.695l-38.956 39.653c-1.2431 1.2675-1.3208 3.2496-0.23308 4.6064l7.9832 9.0491 1.1058-1.1031c4.174-4.174 11.131-4.174 15.305 0l32.695 32c4.174 4.869 4.174 11.826 0 16l-5.565 5.565c-2.087 2.087-4.869 2.782-7.652 2.782s-5.565-0.695-7.652-2.782l-32.696-32.696c-3.6674-3.6674-4.1125-9.4825-1.3353-13.671l-8.2166-9.3161c-4.599-4.615-4.599-12.08 0-16.695l38.956-38.957c1.392-1.391 1.392-4.174 0-4.869l-13.913-14.609c-1.352-1.326-3.516-1.326-4.869 0l-6.261-6.261c4.615-4.599 12.08-4.599 16.695 0zm-7.2619 86.992-0.57618-5e-3c-0.696 0-2.087 0-2.783 1.391l-5.565 4.87c-1.392 2.087-1.392 4.869 0 6.261l32.695 32.695c1.662 1.885 4.6 1.885 6.261 0l4.87-5.565c2.087-1.391 2.087-4.174 0-6.261l-32-32c-1.1852-1.1852-1.8659-1.3606-2.9018-1.3865z" fill="#e8feff"/>
 <g fill="#77b3b2">
  <path d="m156.57 72.446 8.9991 8.9454c2.783 2.783 2.783 7.653 0 11.131l-70.261 70.261c-2.782 2.782-7.652 2.782-10.434 0l-9.6951-9.6414c-2.783-2.783-2.783-7.652 0-10.435l70.261-70.261c3.478-3.478 8.348-3.478 11.13 0z"/>
  <polygon points="132.33 53.545 119.8 66.067 107.28 53.545 119.8 41.023"/>
  <polygon points="69.716 115.46 57.195 127.98 44.673 115.46 57.195 102.94"/>
 </g>
 <polygon id="vert" points="94.064 90.415 81.542 102.94 69.021 90.415 81.542 77.893" fill="<?php echo $couleur;?>"/>
 <polygon points="119.11 90.415 106.59 102.94 94.064 90.415 106.59 77.893" fill="#73a9ae"/>
 <polygon points="94.76 115.46 82.238 127.98 69.716 115.46 82.238 102.94" fill="#73a9ae"/>
 <g fill="#f0f9fe">
  <polygon points="106.59 102.94 94.064 115.46 81.542 102.94 94.064 90.415"/>
  <polygon points="144.15 65.371 131.63 77.893 119.11 65.371 131.63 52.849"/>
  <polygon points="82.238 127.98 69.716 140.5 57.195 127.98 69.716 115.46"/>
 </g>
 <polygon points="119.11 65.371 106.59 77.893 94.064 65.371 106.59 52.849" fill="<?php echo $couleur;?>"/>
 <polygon points="81.542 77.893 69.021 90.415 56.499 77.893 69.021 66.067" fill="#77b3b2"/>
 <polygon points="119.8 41.023 107.28 53.545 94.76 41.023 107.28 28.501" fill="#d40000"/>
 <polygon points="44.673 90.415 32.151 102.94 19.629 90.415 32.151 77.893" fill="#77b3b2"/>
 <polygon points="82.238 53.545 69.716 66.067 57.195 53.545 69.716 41.023" fill="<?php echo $couleur;?>"/>

</svg>
</article>
</body>
</html>
