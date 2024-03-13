
<html>
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet"  media="all">
<meta name="author" content="Stephane Brunet" /> 
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-1-Les fonctions Chaine !</title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="13-4-fonctionsMath!.php"> 13 Ft Math</a>
        <a href="13-5-fonctionsChaine!.php"> 13 Chaine !</a>
        <a href="13-6-fonctionsChaineprintf.php"> 13 Chaine print</a>
    </nav>

</header>


<article>



<?php
$chaine1="\t\tThese are a few words :) ...  ";
$chaine2="Un 'apostrophe' en <strong>gras</strong>";
//trim($chaine )-- supprime les caractères non affichables aux extrèmités de la chaine
echo (trim($chaine1));
 echo '<br />';//chr($ascii) --Caractère sur code ASCII. [Chr(69) => E]
echo Chr(69);
 echo '<br />';//ord ($char)-- Valeur ASCII du caractère.[ord(E) => 69]
echo ord('E');
 //echo '<br />';//explode("separateur",$chaine) -- Scinde une chaine en morceaux, gr�ce � un d�limiteur, et cr�e un tableau.
$info = explode("#","france#33#"); echo $info[0].$info[1];
 echo '<br />'; //implode("separateur",$tableau) ou join -- Regroupe tous les éléments d'un tableau dans une chaine, avec une chaine de jointure.
 $arr = array("1","2","3");
 echo "array is: '".implode("','",$arr)."'";
 echo '<br />'; //htmlentities($chaine) --Convertit tous les caractères spéciaux en entité HTML.

echo '<br />';
//encodage des accents ET des balises
$chaine3 = " My name is <em>Øyvind Åsane.</em> <strong> I'm Norwegian</strong>.";
echo 'htmlentities :'.htmlentities($chaine3, ENT_QUOTES, "utf-8");
$chaine_secu=htmlentities($chaine3, ENT_QUOTES, "utf-8");

$texte_retrouve=html_entity_decode($chaine_secu);
echo "\n".'<br />texte initial :'.$texte_retrouve;
echo '<br />';
//php8.2
$randomizer = new Random\Randomizer();
echo $randomizer->shuffleBytes('supercalifragilisticexpialidocious');




?>
</article>

</body>
</html>
