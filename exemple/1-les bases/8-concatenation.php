<html>
<head>

<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<meta charset="utf-8">
<title>PHP-1- Les op&eacute;rations </title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="7-concatenation.php"> 7  concatenation</a>
        <a href="8-concatenation.php"> 8 concatenation</a>
        <a href="9_operateurcalcul!.php"> 9 op&eacute;rateurs</a>
    </nav>

</header>


  <article>


		<?php
		$etage = 9;
		 echo 'Nous sommes au '. $etage .' i&egrave;me &eacute;tage de la tour';
		?>
		<br />
		<?php
		$str = 'Nous sommes &agrave;';
		//$str = $str." la d&eacute;fense ";
		$str .= " la d&eacute;fense ";
    //$str2 = 2000;
    $str .= 2000;
    //$str .= $str2; //concatène à la suite de la chaîne copy
		echo $str; //affiche " Nous sommes à la défense 2000"
		?>

</article>
</body>
</html>
