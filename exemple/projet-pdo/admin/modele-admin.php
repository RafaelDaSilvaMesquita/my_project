<?php
include('../connexion.php');

function get_histos()
{
    global $bdd;
    try
    {
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $req = $bdd->prepare(
       'SELECT coul, valeur, legende, id, quinte_annee
        FROM resultats
        ORDER BY ordre');
        //print_r($req);
      $req->execute();
      $resultats = $req->fetchAll();
      return $resultats;
      // libere la connexion
      $req->closeCursor();
    }
  catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
    }
}

function get_histoid($id){
    global $bdd;
    try
    {
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $req = $bdd->prepare(
       'SELECT coul, valeur, legende, id, quinte_annee
        FROM resultats
        WHERE id=:id');
        $req->bindParam(':id', $id, PDO::PARAM_INT,3);
        //print_r($req);
      $req->execute();
      $resultat = $req->fetchAll();
      return $resultat;
      // libere la connexion
      $req->closeCursor();
    }
    catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
    }
}

function updatehisto($id, $valeur,$couleur,$legende, $annee){
      global $bdd;
      // $query = "UPDATE table SET nom = :nom ";
      // $prep = $this->laConnexion->prepare($query);
      // $prep->bindParam(':nom', $nom, PDO::PARAM_STR,100);
      // $prep->execute();

      $req = $bdd->prepare(
      'UPDATE resultats
       SET valeur = :valeur,
           coul=:coul,
           legende=:legende,
           quinte_annee=:quinte_annee
           WHERE id=:id');
        $req->bindParam(':valeur', $valeur, PDO::PARAM_STR,9);
        $req->bindParam(':coul', $couleur, PDO::PARAM_STR,11);
        $req->bindParam(':legende', $legende, PDO::PARAM_STR);
        $req->bindParam(':quinte_annee', $annee, PDO::PARAM_INT,4);
        $req->bindParam(':id', $id, PDO::PARAM_INT,3);
      //print_r($req);
      //die('requete');
      $req->execute();
      if (!$req->execute())
      {
        echo 'Erreur';
      }
}
