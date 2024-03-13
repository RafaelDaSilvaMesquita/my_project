<?php
include('../connexion.php');
function get_histos($annee)
{
    global $bdd;

    $req = $bdd->prepare(
     'SELECT coul, valeur, legende
      FROM resultats
      WHERE quinte_annee=:annee
      ORDER BY ordre');
      $req->bindParam(':annee', $annee, PDO::PARAM_INT,4);
      //print_r($req);
    $req->execute();
    $resultats = $req->fetchAll();

    return $resultats;

    // libere la connexion
    $req->closeCursor();
}
