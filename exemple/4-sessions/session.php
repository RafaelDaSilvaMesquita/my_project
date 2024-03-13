<?php
  session_start();
if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])
&& isset($_SESSION['identrep']) && isset($_SESSION['type'])) {
    $idpersonne=$_SESSION['id'];
    $nom=$_SESSION['nom'];
    $prenom=$_SESSION['prenom'];
    $identrep=$_SESSION['identrep'];
    $type=$_SESSION['type'];
  }
else {
// sinon on le redirige vers la page d'accueil
header('Location: 10-token.php');
}
?>
