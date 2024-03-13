<?php
//include_once('connexion.php');
function get_films($offset, $limit)
{
    global $bdd;
    $offset = (int)$offset;
    $limit = (int)$limit;
    try
      {
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


    $req = $bdd->prepare(
      'SELECT id, titre, `date` AS date_sortie
       FROM film
       ORDER BY titre
       LIMIT :offset, :limit');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT,2);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT,2);
    $req->execute();
    $films = $req->fetchAll();

    return $films;
      }
      catch(Exception $e)
      {
    die('erreur :'.$e->getMessage());
  }
}
