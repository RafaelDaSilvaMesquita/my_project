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
        <a href="6-tableaux-search!.php">6 tableaux search !</a>
	      <a href="7-tableaux-trie.php">7 tableaux trie</a>
        <a href="7-1table-variable.php">7 tableaux -variable</a>
        <a href="8-tableaux-2D.php">2D</a>
    </nav>

</header>
<article>
Affecte à plusieurs variables <br />

<?php
function afficheTableau($tab)
  { foreach($tab as $cle =>$valeur)
    {echo "$cle - $valeur " ;}
      echo '<br />';
  }

  $prenoms = array ('Stephane', 'Marc', 'Charlotte', 'Sophie');
  sort($prenoms);
  print_r($prenoms);
  ?>
<br />
  <?php
  rsort($prenoms);
  print_r($prenoms);
  ?>
  <br />
  <?php
  // random sur le tableau
  shuffle($prenoms);
  print_r($prenoms);
  ?>

<br />
  <?php
  //garde le couple cle-valeur
  $prenoms = array ('Stephane', 'Marc', 'Charlotte', 'Sophie');
  asort($prenoms);
  foreach($prenoms as $cle =>$valeur){
      echo "$cle - $valeur " ;}
  echo '<br />';

  arsort($prenoms);
  foreach($prenoms as $cle =>$valeur){
      echo "$cle - $valeur " ;}
  echo '<br />';

  krsort($prenoms);
  afficheTableau($prenoms);

  //usort() va trier le tableau array avec ses valeurs,
  // en utilisant une fonction définie par l'utilisateur.
  // Si un tableau doit être trié avec un critère complexe,
  // il est préférable d'utiliser cette fonction.
  $start=date("Y-m-d 09:30:00",mktime(16, 30, 0, date("m")  , date("d")-1, date("Y")));
  $end=date("Y-m-d H:i:s",mktime(16, 30, 0, date("m")  , date("d")+2, date("Y")));
  $today=date("Y-m-d H:i:s",mktime(date("h"), date("i"), 0, date("m")  , date("d"), date("Y")));

  $rdv = array(
    array(
        "title" => "Aujourd'hui",
        "date"  => $today
      ),
    array(
        "title" => "fin de la formation",
        "date"  => $end
      ),
    array(
        "title" => "Début de la formation",
        "date"  => $start
      )
    );
    print_r($rdv);
    function sortFunction( $a, $b ) {
        return strtotime($a["date"]) - strtotime($b["date"]);
      }
    usort($rdv, "sortFunction");
    echo('<pre>');
    var_dump($rdv);
    echo('</pre>');
  ?>
</article>

</body>
</html>
