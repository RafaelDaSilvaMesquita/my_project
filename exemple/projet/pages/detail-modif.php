<?php
include("connexion.php");
function redirige($url)
   {
      die('<meta http-equiv="refresh" content="0;URL='.$url.'">');
   }
$id=1;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

$sql = "SELECT coul, id, valeur, legende
FROM resultats
WHERE id=$id"  ;
$result = mysqli_query($bdd, $sql);
$row = mysqli_fetch_row($result);
// en cas de modif sur un id qui n'existe pas
if($row[1]==NULL)
  {redirige("modif.php"); }
//echo $sql;
//echo '<pre>';
//print_r($row);
//echo '</pre>';
function rgb2hex($rgb) {
   $rgb=explode(',',$rgb);
   $hex = "#";
   $hex .= str_pad(dechex($rgb[0]), 2, "0", STR_PAD_LEFT);
   $hex .= str_pad(dechex($rgb[1]), 2, "0", STR_PAD_LEFT);
   $hex .= str_pad(dechex($rgb[2]), 2, "0", STR_PAD_LEFT);

   return $hex; // returns the hex value including the number sign (#)
}
$coul=$row['0'];
echo $coul;
$coulhex=rgb2hex($coul);
echo $coulhex;
?>

<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modifs resultats</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="recup.php">
  <p>
    <label for="couleur">couleur</label>
    <input type="color" name="couleur" value="<?php echo $coulhex; ?>" />
  </p>
  <p>
    <label for="legende">legende</label>
    <input type="text" name="legende" value="<?php echo $row['3']; ?>" />
  </p>
  <p>
    <label for="valeur">Valeur</label>
    <input type="number"  step="any" min="5" max="200" name="valeur"
      value="<?php echo $row['2']; ?>" />
  </p>
  <input type="hidden" name="id" value="<?php echo $row['1']; ?>">
  <input type="submit" name="button" id="button" value="Envoyer" />
</form>
</body>
</html>

<?php
mysqli_free_result($result);
?>
