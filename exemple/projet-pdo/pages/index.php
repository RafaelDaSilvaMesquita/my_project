<?php
	include('connexion.php');
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
	   $pwd = sha1($pwd);
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
					header('Location: index.php');
					}
			}
			setcookie($cook,$tokcookie); // cookie de session
	?>

<html>
<head>
  <meta name="author" content="Stephane Brunet" />
	<link href="../css/style-admin.css" rel="stylesheet">
  <meta charset="utf-8">
  <title>Projet Authentification</title>
</head>
<body>
<header>
    <div><h1>Projet Authentification</h1></div>
    <nav>

    </nav>

</header>
<article>

<h3>Formulaire simple</h3>
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
