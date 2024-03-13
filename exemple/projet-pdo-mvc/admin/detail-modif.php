<?php
//include("../connexion.php");
$id=$_GET['id']??1;
$id=(int)$id;
include("cont-modif.php");
$donnees=get_histoid($id);
var_dump($donnees);
// en cas de modif sur un id qui n'existe pas
if($donnees[0]['id']==NULL)
{header('Location: modif.php'); }
//echo $sql;
//echo '<pre>';
//print_r($row);
//echo '</pre>';
//print_r($donnees[0]);
?>

<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/style-admin.css" rel="stylesheet">
<link rel="icon" type="image/svg+xml" href="../images/bar-admin.svg">
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
    <input type="text" name="legende" value="<?php echo $donnees[0]['legende']; ?>" />
  </p>
  <p>
    <label for="valeur">Valeur</label>
    <input type="number"  step="any" min="5" max="200" name="valeur"
      value="<?php echo $donnees[0]['valeur']; ?>" />
  </p>
  <p>
    <label for="valeur">Année</label>
    <input type="number"  min="0000" max="4000" name="annee"
      value="<?php echo $donnees[0]['quinte_annee']; ?>" readonly/>
  </p>
  <input type="hidden" name="id" value="<?php echo $donnees[0]['id']; ?>">
  <input type="submit" name="button" id="button" value="Envoyer" />
</form>
</body>
</html>
