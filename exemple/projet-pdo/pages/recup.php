<?php

function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}

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
include("connexion.php");
$sql = "UPDATE resultats
SET valeur='$valeur',coul='$coul',legende='$legende'
WHERE id = $id "  ;
$result = mysqli_query($bdd, $sql);


?>
<html>
<head>
<meta http-equiv="refresh" content="3; URL=modif.php">
<title> Recup modification </title>
</head>
<body>

<?php
echo 'maj : '.$valeur.' <br />couleur : '.$coul.'
<br />Legende : ' .$legende ;
?>


</body>
</html>
