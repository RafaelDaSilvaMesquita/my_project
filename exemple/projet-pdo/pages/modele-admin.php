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
function updatehisto($id){
      global $bdd;
      // $query = "UPDATE table SET nom = :nom ";
      // $prep = $this->laConnexion->prepare($query);
      // $prep->bindParam(':nom', $nom, PDO::PARAM_STR,100);
      // $prep->execute();

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
}
