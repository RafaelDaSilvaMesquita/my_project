<?php
 function redirige($url)
{
   die('<meta http-equiv="refresh" content="0;URL='.$url.'">');
}

include('connexion.php');
$id = null;
$id_diapo = '';
if (isset($_GET['iddiapo']))
{
	$id_diapo = $_GET['iddiapo'];
}
if (isset($_GET['id']))
{
	$id = $_GET['id'];
}
$sql = "DELETE FROM diapo_chiffre where id = $id";
mysqli_query($bdd, $sql);
redirige('liste.php?iddiapo='.$id_diapo);
?>