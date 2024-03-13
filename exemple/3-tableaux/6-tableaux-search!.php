<html>
<head>
  <link href="style.css" rel="stylesheet" media="all">
  <meta name="author" content="Stephane Brunet" />
  <link rel="icon" type="image/svg+xml" href="php.svg">
  <meta charset="utf-8">
  <title>PHP-3-tableaux</title>
</head>
<body>
<header>
    <div><h1>PHP-3-Tableau</h1></div>
    <nav>
        <a href="5-tableaux-print_r.php">5 tableaux printr</a>
        <a href="6-tableaux-search!.php">6 tableaux search !</a>
        <a href="7-tableaux-trie.php">7 tableaux tri&eacute;</a>
    </nav>

</header>
<article>
Trie <br />

<?php

$coordonnees = array (
'prenom' => 'Stephane',
'nom' => 'Brunet',
'adresse' => 'Arche de la défense',
'ville' => 'Paris la Défense',
'cp' => 92044);

if (array_key_exists('nom', $coordonnees))
{
echo 'La clé "nom" se trouve dans les coordonnées !';
}
if (array_key_exists('pays', $coordonnees))
{
echo 'La clé "pays" se trouve dans les coordonnées !';
}
echo '<br /><br />in_array :<br /><br />';

if (in_array('Brunet', $coordonnees))
{
echo 'Le nom "Brunet" se trouve dans le tableau "coordonnées" !';
}

echo '<br /><br />array_search:<br /><br />';
$prenoms = array ('Stephane', 'Marc', 'Charlotte', 'Sophie');
//echo '<pre>';
// print_r($prenoms);
//echo '</pre>';

$position = array_search('Charlotte', $prenoms);
echo '"Charlotte" est en clé : ' . $position . ' <br />';



//différence entre ISSET et array_key_exists;
$tabl = array(
  'key1' => 'フーバー',
  'key2' => NULL
);
isset($tabl['key1']);             // true
array_key_exists('key1', $tabl);  // true

isset($tabl['key2']);             // false
array_key_exists('key2', $tabl);  // true
?>

</body>
</html>
