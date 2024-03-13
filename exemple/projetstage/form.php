<?php
include("connexion.php");

$id = null;
$legende = '';
$couleur = '';
$couleur_texte = '';
$valeur = '';
$id_diapo = '';
if (isset($_GET['iddiapo']))
{
	$id_diapo = $_GET['iddiapo'];
}
if (isset($_GET['id']))
{
	$id = $_GET['id'];
}
if (isset($id))
{
	$sql = "SELECT legende, couleur, couleur_texte, valeur FROM diapo_chiffre WHERE id = $id";
	$resultat = mysqli_query($bdd,$sql);
	$donnees = mysqli_fetch_assoc($resultat);
	$legende = $donnees['legende'];
	$couleur = $donnees['couleur'];
	$couleur_texte = $donnees['couleur_texte'];
	$valeur = $donnees['valeur'];
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

<div class='container'>
	<header>
	<?php
		if (isset($_GET['id']))
		{
			echo"<h1>Modifier une valeur</h1>";
		}
		else
		{
			echo"<h1>Ajouter une valeur</h1>";
		}
	?>
	</header>
	<div id="da-slider" class="da-slider">
		<div class='da-slide'>
			<form name='frm_projet' method="post" action="save.php">
				<table border=0>
					<tr><td>legende : </td><td>
					<input type="text" name="legende" value="<?php echo $legende; ?>" /></td></tr>
					<tr><td>couleur histogramme : </td><td>
					<input type="text" name="couleur" value="<?php echo $couleur; ?>" /></td></tr>
					<tr><td>couleur texte : </td><td>
					<input type="text" name="couleur_texte" value="<?php echo $couleur_texte; ?>" /></td></tr>
					<tr><td>valeur : </td><td>
					<input type="text" name="valeur" value="<?php echo $valeur; ?>" /></td></tr>
				</table>
				<input type="hidden" name="iddiapo" value="<?php echo $id_diapo; ?>" />
				<input type="hidden" name="idchiffre" value="<?php echo $id; ?>" />
			</form>
			<br>
			<a href='javascript:submitForm()' class='da-bouton'>Enregistrer</a>			
		</div>
	</div>
</div>
<?php
if (isset($id))
{
	mysqli_free_result($resultat);
	
}
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
<script type="text/javascript">
	function submitForm() {
		frm_projet.submit();
	}
</script>
<script type="text/javascript">
	$(function() {
	
		$('#da-slider').cslider();
		
	});
</script>	
</body>
</html>