<?php

$req = $bdd->prepare(
      'SELECT titre, couleur,num, descript
       FROM diapo
       WHERE statut=1
       ORDER BY num
       LIMIT 0, 4'
);
$req->execute();
$donnees = $req->fetchAll();
//echo $sql;
//print_r($donnees);

// var_dump($donnees);
// var_dump($donnees[0][0][0]);

for ($i = 0; $i < 4; $i++) {
      $titre[$i] = htmlentities($donnees[$i][0], ENT_QUOTES, 'utf-8');
      $coul[$i] = htmlentities($donnees[$i][1], ENT_QUOTES, 'utf-8');
      $num[$i] = (int) $donnees[$i][2];
      $descript[$i] = htmlentities($donnees[$i][3], ENT_QUOTES, 'utf-8');
}
?>