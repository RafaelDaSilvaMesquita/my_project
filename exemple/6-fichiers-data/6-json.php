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
      <a href="5-1-json.php">JSON Decode</a>
      <a href="6-json.php">Ajax</a>
      <a href="7-webservice.php">webservice</a>
    </nav>

</header>
<article>

  <p id="demo"></p>
<br />
</article>
<script>

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        document.querySelector("#demo").innerHTML = myObj[2]+
        '<?php
        $string='{"Charlotte":17, "Janis":"27"}';
        $json_a=json_decode($string,true);
        echo $json_a['Charlotte']; ?>';
    }
};
xmlhttp.open("GET", "json_client.php", true);
xmlhttp.send();

</script>
</body>
</html>
