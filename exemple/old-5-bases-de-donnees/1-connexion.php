<?php
define("HOTE", "localhost");
define("BASE", "phh");
define("USER", "root");
define("PASS", "");

try {
    if ($bdd = mysqli_connect(HOTE, USER, PASS, BASE))
    {
      mysqli_set_charset($bdd, 'utf8');
    } else {
      throw new Exception('Unable to connect');
    }
}
catch(Exception $e)
{
    echo $e->getMessage();
}
?>
