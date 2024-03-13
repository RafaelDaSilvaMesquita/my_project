<?php
  session_start();
  if (isset($_SESSION['nx']) && ($_SESSION['nx']==1)) {
    //echo $_SESSION['nx'];
  }
else {
// sinon on le redirige vers la page d'accueil
 header('Location: index.php');
}
?>
