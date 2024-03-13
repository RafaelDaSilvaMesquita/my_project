
<html>
<head>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet" media="all">
	<link rel="icon" type="image/svg+xml" href="php.svg">

	<title> 2- Formulaires </title>
</head>
<body>
	<header>
	    <div><h1>PHP-2-formulaire</h1></div>
	    <nav>
	        <a href="6-form.html">6 fichier </a>
					<a href="7-recupfile!.php">7 recup</a>
	        <a href="8-formlogin.html"> formulaire </a>
	    </nav>

	</header>

<h3>Formulaire avec fichier</h3>
<pre>
	<?php
	print_r($_FILES['photo']);

	if (isset($_FILES['photo']) && $_FILES['photo']['size']>100
	&& $_FILES['photo']['size']<2000000)
	{
	$uploads_dir = 'recup';
	 if(count(scandir($uploads_dir))>200){
		die('trop de fichiers');
	}
	//$nomfichier=bin2hex(random_bytes(15));
	$nomfichier="titi".urlencode($_FILES['photo']['name']);
	$nomcomplet=$uploads_dir.'/'.$nomfichier;
	//echo realpath($nomfichier);
	move_uploaded_file($_FILES['photo']['tmp_name'],
	$nomcomplet) ;}
?>
</pre>

</body>
</html>
