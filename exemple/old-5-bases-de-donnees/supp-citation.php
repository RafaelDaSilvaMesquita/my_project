<?php
include('1-connexion.php');
if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
  $id=$_GET['id'];
  $deleteSQL = "DELETE FROM repliques WHERE id=$id";
  mysqli_query($bdd, $deleteSQL);
  echo $deleteSQL;
  header('Location: 2-liste.php');
}
  ?>
