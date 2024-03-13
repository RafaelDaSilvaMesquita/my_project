<?php
function redirige($url)
{
   die('<meta http-equiv="refresh" content="0;URL='.$url.'">');
}
include("connexion.php");
$id_diapo = '';
if (isset($_GET['iddiapo']))
{
	$id_diapo = $_GET['iddiapo'];
}
$annee = '';
if (isset($_GET['annee']))
{
	$annee = $_GET['annee'];
}

$nom = $_POST['nom'];
$pwd = $_POST['pwd'];
$sql = "SELECT * FROM user WHERE nom = '$nom' AND password = '$pwd'";
$resultat = mysqli_query($bdd, $sql);
$nb_histo = mysqli_num_rows($resultat);
$donnees = mysqli_fetch_assoc($resultat);

if ($nb_histo > 0)
{
	session_start();
	$_SESSION['nom']=$donnees['nom'];
	$_SESSION['pwd']=$donnees['password'];
	mysqli_free_result($resultat);
	if (isset($annee))
	{
		redirige("liste.php?annee=".$annee);
	}
	elseif (isset($id_diapo))
	{
		redirige("liste.php?iddiapo=".$id_diapo);
	}
}
else
{
	mysqli_free_result($resultat);
	redirige('aut.php?ok=0&iddiapo='.$id_diapo."&annee=".$annee);	
}




?>