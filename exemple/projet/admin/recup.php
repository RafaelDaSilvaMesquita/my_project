<?php
include('fonctions.php');

 if( isset( $_POST['couleur'] ) )
 {$coul = hex2rgb($_POST['couleur']);
 $coul= $coul[0].','.$coul[1].','.$coul[2];}
 else
 {$coul =null;}

 if( isset( $_POST['legende'] ) )
 $legende = htmlentities($_POST['legende'], ENT_QUOTES, "utf-8");
 else
$legende =null;

if( isset( $_POST['id'] ) )
 $id = (int)$_POST['id'];
 else
$id =null;

if( isset( $_POST['valeur'] ) )
 $valeur = (float)$_POST['valeur'];
 else
$valeur =null;

include("../pages/connexion.php");
if($valeur !=null && $id >0 && $coul !=null)
  {$sql = "UPDATE resultats
    SET valeur=$valeur, coul='$coul', legende='$legende'
    WHERE id = $id "  ;
  $result = mysqli_query($bdd, $sql);}
?>
<html>
  <head>
    <meta http-equiv="refresh" content="3; URL=modif.php">
    <title> BO : Recup des modifications </title>
    <link href="../style-admin.css" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="../images/bar-admin.svg">
  </head>
  <body>
    <?php
    echo 'mise à jour valeur : '.$valeur.'
    <br />couleur : <mark style="background-color:rgb('.$coul.')">'.$coul.'</mark>
    <br />Légende : ' .$legende ;
    ?>
    <br />Redirection vers la liste résultats
  </body>
</html>
