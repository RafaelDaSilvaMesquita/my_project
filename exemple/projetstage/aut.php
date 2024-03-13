<?php
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
$ok = '1';
if (isset($_GET['ok']))
{
	$ok = $_GET['ok'];
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
	if ($ok == '1')
	{
		echo "<h1>Veuillez vous identifier</h1>";
	}
	else
	{
		echo "<h1>Identifiants incorrects</h1>";
	}
	?>
	</header>
	
	<div id="da-slider" class="da-slider">
		<div class='da-slide'>
			<form name='frm_projet' method="post" action="connect.php?iddiapo=<?php echo $id_diapo ?>&annee=<?php echo $annee ?>">
				<table border=0>
					<tr><td>nom : </td><td>
					<input type="text" name="nom" value="" /></td></tr>
					<tr><td>mot de passe : </td><td>
					<input type="password" name="pwd" value="" /></td></tr>
				</table>
				<input type="hidden" name="iddiapo" value="<?php echo $id_diapo; ?>" />
				<input type="hidden" name="idchiffre" value="<?php echo $id; ?>" />
			</form>
			<br>
			<a href='javascript:submitForm()' class='da-bouton'>Se connecter</a>			
		</div>
	</div>
</div>

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