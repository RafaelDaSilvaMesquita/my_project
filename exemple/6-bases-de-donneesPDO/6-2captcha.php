<?php
//check if form was sent
if($_POST){
	$to = 's.brunet@leserveur.com';
	$subject = 'Test HoneyPot';
  $name = $_POST['name'];
	$header = "From: $name <$name>";
	$email = $_POST['email'];
	$message = $_POST['message'];
	//honey pot field
	$honeypot = $_POST['firstname'];
	//check if the honeypot field is filled out. If not, send a mail.
	if( $honeypot > 0 ){
		return; //you may add code here to echo an error etc.
	}else{
		mail( $to, $subject, $message, $header );
	}
}
?>


<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<title>PHP-5-base de données</title>
<style>
		.hide-robot{
			display:none;
		}
</style>
</head>
<body>
<header>
    <div><h1>PHP-5-BDD</h1></div>
    <nav>
        <a href="5-insert-citation!.php">5 citation form </a>
        <a href="6-traitement-citation.php">6 traitement</a>
        <a href="7-listecroisee.php">7 liste crois&eacute;e</a>
    </nav>

</header>
<article>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="my-form">
		<!-- Create fields for the honeypot -->
		<input name="firstname" type="text" id="firstname" class="hide-robot">
		<!-- honeypot fields end -->

		<input name="name" type="text" id="name" placeholder="Name" required><br />
		<input name="email" type="email" id="email" placeholder="Email" required><br />
		<textarea name="message" id="message" placeholder="Enter your message here" required></textarea><br>
		<input type="submit">
  </form>
</article>
</body>
</html>
