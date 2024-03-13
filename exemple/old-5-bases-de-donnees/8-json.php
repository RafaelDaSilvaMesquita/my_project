<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<title>PHP-5-base de données</title>
</head>
<body>
<header>
    <div><h1>PHP-5-BDD</h1></div>
    <nav>
        <a href="7-listecroisee.php">7 liste crois&eacute;e</a>
		<a href="8-json.php">8 json</a>
        <a href="../6-images/1-creation.php">&gt; &gt; </a>
    </nav>

</header>
<article>
<?php

    $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
    echo '<pre>';
    print_r(json_decode($json));
    echo '</pre>';
    var_dump(json_decode($json, true));
    echo '<br />';
    $string='{"name":"John Doe", "city":"New York"}';
    $json_a=json_decode($string,true);
    echo $json_a['name'];

    echo '<br />';
    $json = file_get_contents('city.js');
    $data = json_decode($json, true);
    echo '<pre>';
    //print_r($data);
    echo '</pre>';
    echo $data[1]['cityName'];

?>
</article>
</body>
</html>
