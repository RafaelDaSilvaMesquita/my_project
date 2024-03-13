<?php
	include('../pages/connexion.php');
	$tok= random_bytes(12);
	$tokcookie=md5(date("Y-m-d").$tok);
	$cook='cook'.date("d");


	if(isset($_POST['login'])&&(isset($_POST['pass']))
	&&($_POST['token']==$_COOKIE[$cook])
	)
	{
		//echo $_POST['token'].'|||'.$_COOKIE[$cook];
		 sleep(1);// contre les brutes force
	   $login = htmlentities($_POST['login']);//login du formulaire
	   $pwd = $_POST['pass'];
	   $pwd = sha1($pwd.SALT);
		//  echo $pwd;

    //requête sql
    $sql = "SELECT login, pwd, niveau FROM admin
		WHERE login='$login' AND pwd='$pwd' ";
    $resultat = mysqli_query($bdd, $sql);
		//echo $sql;
		$count=mysqli_num_rows($resultat);
		//echo $count;
		//le nombre de resultats doit être = 1
		$donnees=mysqli_fetch_row($resultat);

    // On charge les données issues de la requête
    // dans des variables

			$logindb=$donnees[0];//login de la base de données
		  $pwddb=$donnees[1];
			$nxdb=$donnees[2];

			if ($login===$logindb AND $pwd===$pwddb AND $count===1)
			{
			  session_start();
			  $_SESSION['nx']=$nxdb ;
				header('Location: modif.php');
			}
				else {
				header('Location: index.php?error=error');
				}
		}
		setcookie($cook,$tokcookie); // cookie de session
	?>

<html>
<head>
  <meta name="author" content="Stephane Brunet" />
  <meta charset="utf-8">
	<link href="../css/style-admin.css" rel="stylesheet">
	<link rel="icon" type="image/svg+xml" href="../images/bar-admin.svg">
  <title>Projet Authentification</title>
</head>
<body>
<header>
	<div>
	<h1>
		<svg  class="lock lock-open" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#009688" fill="none" stroke-linecap="round" stroke-linejoin="round">
		<path stroke="none" d="M0 0h24v24H0z"/>
		<rect x="5" y="11" width="14" height="10" rx="2" />
		<circle cx="12" cy="16" r="1" />
		<path d="M8 11v-5a4 4 0 0 1 8 0" />
	</svg>
	Projet : Back Office
	<svg class="lock lock-close" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#009688" fill="none" stroke-linecap="round" stroke-linejoin="round">
		<path stroke="none" d="M0 0h24v24H0z"/>
		<rect x="5" y="11" width="14" height="10" rx="2" />
		<circle cx="12" cy="16" r="1" />
		<path d="M8 11v-4a4 4 0 0 1 8 0v4" />
	</svg>
	</h1>
</div>

</header>
<article>

<h3>Formulaire Authentification</h3>
<?php
$erreur=$_GET['error']??NULL;
if ($erreur!=NULL){echo '<h3> Mauvaise authentification</h3>';}
 ?>
 <form name="form1" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
 <p><label for="login">Login</label>
 <input type="text" name="login" />stephane</p>
 <p><label for="pass">Pass</label>
 <input type="password" name="pass" />stephane sera ajouté le salt : "<?php echo SALT;?>"</p>

 <input type="submit" name="Submit" value="Ok" />
 <input type="hidden" name="token" value="<?php echo md5(date("Y-m-d").$tok); ?>" />
 </form>

</article>

</body>
</html>
