<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="St&eacute;phane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-8-POO</title>
</head>
<body>
<header>
    <div><h1>PHP-8-POO</h1></div>
    <nav>
        <a href="7-typeobjet.php">7 type</a>
        <a href="8-constructeur.php">8 constructeur</a>
        <a href="9-heritage.php">9 heritage</a>
    </nav>

</header>
<article>
  <?php
    class Membre
      {
       public function __construct($surnom)
         {
           if (! function_exists('encode_accents') ) {
             function encode_accents($str, $charset='utf-8')
                      {
                          $str = htmlentities($str, ENT_NOQUOTES, $charset);
                          $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|
                          grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
                          return $str;
                      }
                    }
           $this->pseudo = $surnom;
           $nickname =encode_accents($this->pseudo, $charset='utf-8');
           $this->email = $nickname.'@tatooine.sw';

        }
      }
    $rebel= new Membre('léïa');
    echo $rebel->pseudo.'<br />';
    echo $rebel->email.'<br />';

    $robot= new Membre('C3P0');
    echo $robot->pseudo.'<br />';
    echo $robot->email;
  ?>


</body>
</html>
