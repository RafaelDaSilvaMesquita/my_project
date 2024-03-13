<?php
include('1-connexion.php');

if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
  $id=(int)$_GET['id'];
  $deleteSQL = "DELETE FROM repliques WHERE id=$id";
  $bdd->query($deleteSQL);
  echo $deleteSQL;
  //die('supp')
  header('Location: 2-liste.php');
}
  ?>
