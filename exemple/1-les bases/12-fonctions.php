<?php

/*
** Function    : do_op
** Input         : INT nbr1, INT nbr2, STRING operation
** Output      : INT result
** Description    : effectue une opération addition, multiplication ou division

*/

function do_op(int $nbr1, int $nbr2, string $operation)
{
  if ($operation == "add")
    return ($nbr1 + $nbr2);
  else if ($operation == "mul")
    return ($nbr1 * $nbr2);
  else if ($operation == "div")
    return ($nbr1 / $nbr2);
  return (NULL);
}
?>
<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<meta charset="utf-8">
<title>PHP-1-Les fonctions</title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="11-logique.php"> 11 logique</a>
        <a href="12-fonctions.php"> 12 fonctions</a>
        <a href="13-1-fonctionsSTRLEN.php"> 13 Ft length</a>
    </nav>

</header>

<article>

	<?php
  echo do_op(10, 20, "mul");

	const TOTO = 15;
  $toto=5;
	function scope () {
		$toto=TOTO;
    //$toto=45;
		echo '<br />var : '.$toto.'<br />';
	}
	scope();
  echo $toto;// non changé dans le scope global
	function scope3 () {
		global $toto;
		echo '<br />'.$toto;
	}
	scope3();
  echo  'const : '.TOTO;
  function scope2 ($toto) {
		echo '<br />'.$toto.'<br />';
	}
  $toto=scope2(20);
	?>

</article>
</body>
</html>
