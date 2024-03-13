<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<title>PHP-1-Les comparaisons</title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="9_operateurcalcul!.php"> 9 op&eacute;rateurs</a>
        <a href="10-comparaison.php"> 10 comparaison</a>
        <a href="11-logique.php"> 11 logique</a>
    </nav>

</header>


<article>


<?php

echo (1==1).'<br />'; //affiche "1"
echo 1!=2; //affiche 1 puisque c'est vrai
echo 3==3.0; //affiche "1" puisque ce sont deux valeurs entières équivalentes
echo '1'==1.0; //affiche "1" puisque la chaîne "1" est équivalente à l'entier numérique "1"
echo '1'=='1.0';//affiche "1" puisque leur valeur numérique évalue à la même valeur entière
echo 1=='1.0 petit lapin';//affiche "1"

echo 1=='1,2'; //affiche "1" puisque leur valeur numérique évalue à la même valeur entière

echo '1'===1.0; //affiche rien puisque le type est testé aussi
echo 1!==1.0;
var_dump(1!==1.0);
?>
</article>
</body>
</html>
