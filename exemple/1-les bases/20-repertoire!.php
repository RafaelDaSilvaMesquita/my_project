<html>
<head>

<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" /> <meta charset="utf-8">
<title>PHP-1-Lire un repertoire</title>
</head>
<body>
<header>
    <div><h1>PHP-1-Lire un repertoire</h1></div>
    <nav>
		<a href="19-les-bouclesdo-while-html!.php"> 19 boucles do-while</a>
		<a href="20-repertoire!.php"> 20 repertoire </a>
        <a href="21-mail!.php">21  mail</a>
    </nav>

</header>
<article>

<?php
function ScanDirectory($directory){

$myDirector = opendir($directory) or die('Erreur');
	while($entry = @readdir($myDirector)) {
		if(is_dir($directory.'/'.$entry)&& $entry != '.' && $entry != '..') {
                         echo '<ul>'.$directory;
			ScanDirectory($directory.'/'.$entry);
                        echo '</ul>';
		}
		else {
			echo '<li>'.$entry.'</li>'."\n";
                }
	}
  closedir($myDirector);
}
$uploads_dir = '.';
echo 'Nbre de fichier : '.count(scandir($uploads_dir));

echo'<ul>';
ScanDirectory('.');
echo'</ul>';

 ?>

</article>

</body>
</html>
