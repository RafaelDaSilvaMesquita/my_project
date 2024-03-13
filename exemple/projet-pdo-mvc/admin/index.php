<?php
	include('../connexion.php');
	$tok= random_bytes(12);
	$tokcookie=md5(date("Y-m-d").$tok);
	$cook='cook'.date("d");

	if(isset($_POST['login'])
	&&(isset($_POST['pass']))
	&&($_POST['token']==$_COOKIE[$cook])
	)
	{
		//echo $_POST['token'].'|||'.$_COOKIE[$cook];
		 sleep(1);// contre les brutes force
	   $login = $_POST['login'];//login du formulaire
	   $pwd = $_POST['pass'];
	   $pwd = sha1($pwd.SALT);
		//  echo $pwd;

      //requête sql
			$req = $bdd->prepare(
				'SELECT login, pwd, niveau
				 FROM admin
				 WHERE login= :login AND pwd=:pwd');
			$req->bindParam(':login', $login, PDO::PARAM_STR);
			$req->bindParam(':pwd', $pwd, PDO::PARAM_STR,41);
			$req->execute();
			$donnees = $req->fetchAll();
			var_dump($donnees);
			$count = count($donnees);
			echo 'Nbre result : '.$count;
			//le nombre de resultats doit être = 1

      // On charge les données issues de la requête
      // dans des variables

				$logindb=$donnees[0]['login'];//login de la base de données
			  $pwddb=$donnees[0]['pwd'];
				$nxdb=$donnees[0]['niveau'];

				if ($login===$logindb AND $pwd===$pwddb AND $count===1)
				{
				  session_start();
				  $_SESSION['nx']=$nxdb ;
					header('Location: modif.php');
				}
				else {
					$brut=0;
					if(isset($_COOKIE['brutf']))
				  	$brut=$_COOKIE['brutf']+1;
					setcookie("brutf",$brut); // cookie
						if($_COOKIE['brutf']>=5)
						{header('Location: https://www.perdu.com');}
						else
					  {header('Location: index.php?error=error');}
					}
		}
			setcookie($cook,$tokcookie); // cookie de session
	?>

<html>
<head>
  <meta name="author" content="Stephane Brunet" />
	<link href="../css/style-admin.css" rel="stylesheet">
	<link rel="icon" type="image/svg+xml" href="../images/bar-admin.svg">
  <meta charset="utf-8">
  <title>Projet Authentification</title>
</head>
<body>
<header>
    <div><h1>
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
		</h1></div>

    <nav>

    </nav>

</header>
<article>

<h3>Formulaire simple</h3>
<?php
$erreur=$_GET['error']??NULL;
if ($erreur=='error'){echo '<h3 class="err"> Mauvaise authentification</h3>';}
 ?>
 <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <p><label for="login">Login</label>
 <input type="text" name="login" />stephane</p>
 <p><label for="pass">Pass</label>
 <input type="password" name="pass" />stephane</p>

 <input type="submit" name="Submit" value="Ok" />
 <input type="hidden" name="token" value="<?php echo md5(date("Y-m-d").$tok); ?>" />
 </form>

</article>

</body>
</html>
