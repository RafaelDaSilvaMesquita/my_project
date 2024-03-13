<?php

	$tok= random_bytes(12);
	$tokcookie=md5(date("Y-m-d").$tok);
	$cook='cook'.date("d");

  if(isset($_POST['login'])
		&&(isset($_POST['pass']))
		&&($_POST['token']==$_COOKIE[$cook])
		&&($_POST['addip']==$_SERVER['REMOTE_ADDR'])

	)
    {header('Location: session.php');}

  setcookie($cook,$tokcookie);
	//recup de l'adresse ip de l'internaute
	if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
		    $ip_address = $_SERVER['REMOTE_ADDR'];
		}
  ?>
<html>
<head>
  <link href="style.css" rel="stylesheet" media="all">
  <meta name="author" content="Stephane Brunet" />
	<link rel="icon" type="image/svg+xml" href="php.svg">
  <meta charset="utf-8">
  <title>PHP-4-sessions</title>
</head>
<body>
<header>
    <div><h1>PHP-4-Session</h1></div>
    <nav>
			<a href="9-local-storage.php">9 local </a>
			<a href="10-token.php">10 token </a>
			<a href="../5-bases-de-donnees/1-connexion.php">&gt; &gt;</a>
    </nav>

</header>
<article>
  <form name="form1" method="post" action="10-token.php" >
  <p><label>Login
    <input type="text" name="login" />
  </label></p>
  <p><label>PWD
    <input type="password" name="pass" />
  </label></p>
  <input type="submit" name="Submit" value="Ok" />

  <input type="hidden" name="token" value="<?php echo md5(date("Y-m-d").$tok); ?>" />
	<input type="hidden" name="addip" value="<?php echo $ip_address; ?>" />
  </form>
</article>
<script>

 //<![CDATA[

</script>
</body>
</html>
