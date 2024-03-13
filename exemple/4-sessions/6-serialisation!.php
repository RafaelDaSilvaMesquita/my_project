
<?php
// On récupère la liste actuelle
if ( isset( $_COOKIE['liste'] ) ) {
// Si le cookie existe ,
// on récupère la liste des heures de visite
$liste_serialisee = $_COOKIE['liste'] ;
// Il faut maintenant décoder le contenu
// pour obtenir le tableau
$liste_tableau = unserialize( $liste_serialisee ) ;
}else{
// Si le cookie n'existe pas encore,
// la liste est un tableau vide
$liste_tableau = array() ;
}
// On ajoute l'heure actuelle
$liste_tableau[] = time() ;
// On renvoie le cookie avec sa nouvelle valeur
// Pour cela, on sérialise le tableau avant
$liste_serialisee = serialize( $liste_tableau ) ;
setcookie('liste', $liste_serialisee,time()+5000) ;
?>
<html>
<head>
  <link href="style.css" rel="stylesheet" media="all">
  <meta name="author" content="Stephane Brunet" />
  <link rel="icon" type="image/svg+xml" href="php.svg">
  <title>PHP-4-sessions</title>
  <meta charset="utf-8">
</head>
<body>
<header>
    <div><h1>PHP-4-Session</h1></div>
    <nav>
        <a href="4-sessions.php">4 session </a>
        <a href="6-serialisation!.php">6 serialisation</a>
        <a href="7-stock-dans-fichier.php">7 Stockage</a>
    </nav>

</header>
<article>
<p> vous êtes venu
<?php echo count( $liste_tableau ) ; ?>&nbsp;
fois, voici le détail : </p>
<ul>
<?php foreach( $liste_tableau as $heure ) {
echo '<li>le ',date("d/m/Y H:i:s", $heure),'</li>';
}
echo ('<pre>');
print_r($liste_tableau);
echo ('</pre>');
?>
</ul>

</article>

</body>
</html>
