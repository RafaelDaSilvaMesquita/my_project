<html>
<head>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<title>PHP-1-Les fonctions </title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="13-1-fonctionsSTRLEN.php"> 13 Ft length</a>
        <a href="13-2-fonctionsSTR_replace.php"> 13 Ft remplace !</a>
        <a href="13-3-fonctionspreg_match!.php"> 13 match</a>
    </nav>

</header>


<article>


<?php
$phrase = 'Elle ne se place en français que sous la lettre c, autant
sous une minuscule que sous une majuscule : ç, Ç.
Elle est utilisée par plusieurs autres langues sous différentes lettres.
On peut voir une certaine ressemblance avec le chiffre 5 dont
la barre supérieure aurait été supprimée. !';

$new_text = str_replace('ç', 'c', $phrase);
//$new_text = str_replace(['Ç','ç'], ['C','c'], $phrase);

echo $new_text.'<br />';

$rech=array("ç","à","é","è","ê","ô"," ","'");
$rempl=array("&ccedil;","&agrave;","&eacute;", "&egrave;","&ecirc;","&ocirc;","","");

echo str_replace($rech,$rempl,$phrase,$count);
echo $count;

?>

</article>
</body>
</html>
