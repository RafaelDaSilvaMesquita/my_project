<html>
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<title>PHP-5-base de donn&eacute;es</title>
</head>
<body>
<header>
    <div><h1>PHP-5-BDD</h1></div>
    <nav>
        <a href="8-json.php">8 json</a>
		<a href="9-json-encode.php">9 encode</a>
        <a href="10-xml.php">10 xml</a>
    </nav>

</header>
<article>
<?php
//Solution for UTF-8 Special Chars.

$array = array(array('nome'=>'Paição','cidade'=>'São Paulo'),array('nome'=>'Paição','cidade'=>'São Paulo'));
$json = json_encode($array,JSON_UNESCAPED_UNICODE);
echo $json;
//
// $array2 = array_map("utf8_encode", $array);
// print_r ($array2);
//
// //encode
// $json = html_entity_decode(json_encode($array), "utf8_encode");
//
// echo $json;
//
// echo '<pre>';
// print_r(json_decode($json));
// echo '</pre>';

?>
</article>
</body>
</html>
