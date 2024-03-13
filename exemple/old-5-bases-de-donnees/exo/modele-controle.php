<?php
$sql = "SELECT titre, couleur,num, descript
        FROM diapo
        WHERE statut=1
        ORDER BY num
        LIMIT 0, 4 ";
//echo $sql;
$resultat = mysqli_query($bdd, $sql);

    $donnees[] = mysqli_fetch_all($resultat);
 // var_dump($donnees);
 // var_dump($donnees[0][0][0]);
 
for($i=0; $i < 4; $i++)
{
      $titre[$i]= htmlentities($donnees[0][$i][0], ENT_QUOTES, 'utf-8') ;
      $coul[$i]=$donnees[0][$i][1];
      $num[$i]=(int)$donnees[0][$i][2];
      $descript[$i]=htmlentities($donnees[0][$i][3], ENT_QUOTES, 'utf-8');
}
?>
