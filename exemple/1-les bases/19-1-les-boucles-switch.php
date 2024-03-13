<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" /> <meta charset="utf-8">
<title>PHP-1-Les Les boucles For</title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les boucles</h1></div>
    <nav>
    <a href="18-les-bouclesdo-while.php">18  boucles do-while</a>
		<a href="19-les-bouclesdo-while-html!.php"> 19 boucles do-while</a>
    <a href="19-1-les-boucles-switch.php"> 19 boucles switch</a>
		<a href="20-repertoire!.php"> 20 repertoire </a>
    </nav>

</header>
<article>

 Boucles Switch <br />
<?php
$nombre = mt_rand(0,5);
switch($nombre) {
    case 5:
    case 4:
      echo "$nombre est sup à 3 <br />";
    break;
    case 3:
      echo "$nombre est sup à 2 <br />";
    case 2:
      echo "$nombre est sup à 1 <br />";
    case 1:
      echo "$nombre est sup à 0 <br />";
    break;
    default:
      echo "$nombre égal à 0 ";
    break;
    }
?>

<?php

  $langue=array("php","java","python","html","css","javascript");
  $random_keys=array_rand($langue,2);// 2= type variable
  $languechoisie=$langue[$random_keys[0]];


  switch ($languechoisie) {
    case "java":
      echo "Votre langage préféré est le $languechoisie  !";
      break;
    case "python":
      echo "Votre langage préféré est le $languechoisie!";
      break;
    case "php":
      echo "Votre langage préféré est le $languechoisie!";
      break;
      case "html":
      case "javascript":
      case "css":
        echo "$languechoisie, langage côté client";
        break;
    default:
      echo "tricheur";
  }
?>
</article>

</body>
</html>
