<?php
include('../pages/connexion.php');
include('fonctions.php');

$id = $_GET['id']??1;

$sql = "SELECT coul, id, valeur, legende, quinte_annee
FROM resultats
WHERE id=$id";

$result = mysqli_query($bdd, $sql);
$row = mysqli_fetch_row($result);
// en cas de modif sur un id qui n'existe pas
if($row[1]==NULL)
  {redirige("modif.php"); }
//echo $sql;
//echo '<pre>';
//print_r($row);
//echo '</pre>';

?>

<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style-admin.css" rel="stylesheet">
<title>BO : Modifs resultats</title>
</head>

<body>
  <h3><?php
    $coul=$row['0'];
    echo "rgb : ".$coul;
    $coulhex=rgb2hex($coul);
    echo " | hex : ".$coulhex;
    ?>
  </h3>
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
  <p>
    <label for="valeur">Année</label>
    <input type="text" name="annee" readonly
      value="<?php echo $row['4']; ?>" />
  </p>
  <input type="hidden" name="id" value="<?php echo $row['1']; ?>">
  <input type="submit" name="button" id="button" value="Envoyer" />
</form>
</body>
</html>

<?php
mysqli_free_result($result);
?>
