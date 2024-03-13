<?php
include("connexion.php");

function redirige($url)
{
   die('<meta http-equiv="refresh" content="0;URL='.$url.'">');
}

$id_diapo = '';
if (isset($_POST['iddiapo']))
{
	$id_diapo = $_POST['iddiapo'];
}
if (isset($_POST['idchiffre']))
{
	$id = $_POST['idchiffre'];
}
if (isset($id))
{
	//Modification
	$sql = "UPDATE diapo_chiffre SET legende = '".$_POST['legende']."', couleur = '".$_POST['couleur']."', couleur_texte = '".$_POST['couleur_texte']."', valeur = '".$_POST['valeur']."' WHERE id = ".$id;
	
}else
{
	//Ajout
	$sql = "INSERT INTO diapo_chiffre (legende, couleur, couleur_texte, valeur, diapo_id) VALUES ('".$_POST['legende']."','".$_POST['couleur']."','".$_POST['couleur_texte']."',".$_POST['valeur'].",".$id_diapo.")";
}
$resultat = mysqli_query($bdd,$sql);
redirige('liste.php?iddiapo='.$id_diapo);
?>