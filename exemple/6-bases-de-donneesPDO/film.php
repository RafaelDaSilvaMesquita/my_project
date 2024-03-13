<?php
if(isset($_GET['go']) || isset($_GET['id_film'])) {

    $json = array();

    if(isset($_GET['go'])) {
        // requête qui récupère les régions
        $requete = "SELECT DISTINCT  film, film_id AS id  FROM ajax ORDER BY film";
    } else if(isset($_GET['id_film'])) {
        $id = htmlentities(intval($_GET['id_film']));
        // requête qui récupère les départements selon la région
        $requete = "SELECT id, pseudo AS film FROM ajax WHERE film_id =". $id ." ORDER BY pseudo";
    }

    // connexion à la base de données
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=phh', 'root', '');
    } catch(Exception $e) {
        exit('Impossible de se connecter à la base de données.');
    }
    // exécution de la requête
    $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));

    // résultats
    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        // je remplis un tableau et mettant l'id en index
        $json[$donnees['id']][] = utf8_encode($donnees['film']);
    }

    // envoi du résultat au success
    echo json_encode($json);
}
?>
