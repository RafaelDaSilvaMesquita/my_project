<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-3-tableaux</title>
</head>
<body>
<header>
    <div><h1>PHP-3-Tableau</h1></div>
    <nav>

		<a href="7-tableaux-trie.php">7 tableaux trie</a>
    <a href="8-tableaux-2D.php">8 tableaux 2D</a>
    <a href="9-colonne.php">9 colonne</a>
        <a href="../4-sessions/1-cookies.php">&gt; &gt; </a>
    </nav>

</header>
<article>
Tableau 2D<br />
  <?php
  $personnes[0] = array('prenom'=>'Jabba', 'surnom'=>'The Huntt');
  $personnes[1] = array('prenom'=>'Han', 'surnom'=>'le vaurien');


  $personnes[2]['prenom'] = 'Wedge';
  $personnes[2]['surnom'] = 'Rogue leader';
  $personnes[3]['prenom'] = 'Léïa';
  $personnes[3]['surnom'] = 'Boushh';
  $personnes[3]['nom'] = 'Organa Solo';

//lire
  foreach($personnes as $cle0=>$cellule2){
          // Lecture de chaque tableau de chaque ligne
  	foreach($cellule2 as $cle=>$valeur){
                  // Affichage
  		echo $cle0.'|'.$cle.': '.$valeur.'<br />'."\n";
  	}
  }

  echo '<pre>';
    print_r($personnes);
  echo '</pre>';
?>
</article>
</body>
</html>
