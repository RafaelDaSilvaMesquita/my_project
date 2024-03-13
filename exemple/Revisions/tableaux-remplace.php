<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<meta charset="utf-8">
<title>PHP-3-tableaux</title>
</head>
<body>
<header>
    <div><h1>PHP-3-Tableau</h1></div>
    <nav>
      <?php
        include('nav.html');
      ?>
    </nav>

</header>
<article>
Creer un nouveau tableau avec des valeur decimales (.)et non (,)
et deux décimales :<br />

<?php

$valeurs = array ('45,235', '123,58742', '225,368', '56.2');
// Puis on fait une boucle pour tout afficher :
foreach($valeurs as $element)
  {
    $new_val[] = round(str_replace(',', '.', $element),2);
  }
  print_r($new_val);
?>
<?php
function hex_encode ($str)
{
$encoded = bin2hex($str);
$encoded = chunk_split($encoded, 2, '%');
$encoded = '%'.substr($encoded, 0, strlen($encoded) - 1);
return $encoded;
}
?>
<?php
$contact = array ('s.brunet@leserveur.com', 'johndoe@jd.fr', 'yoda@maitre.jedi');
// Puis on fait une boucle pour tout afficher :
foreach($contact as $element)
  {
    $email = explode("@",$element);
    echo '<a href="mailto:'.hex_encode($element).'">'.$email[0].'</a><br />'."\n";
  }

?>
</article>
</body>
</html>
