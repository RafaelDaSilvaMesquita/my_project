<?php
include '../connexion.php'; //appel du fichier de connexion
 if( isset( $_POST['login'] )) //si jamais le login du formulaire est renseigné on va 
 {                             //échapper tout les caractères dangereux du login 
   $login= htmlentities( $_POST['login'], ENT_QUOTES, "utf-8");}


 if( isset( $_POST['password'])) //on fais un hacher salé sur le mot de passe
 {$password = sha1($_POST['password'].SALT);
    $sql = "SELECT login, mdp, patient_id FROM patient
    WHERE login='$login' AND mdp='$password' ";
$resultats = $bdd->query($sql);
    //echo $sql;
    //var_dump($bdd);
    //echo $count;
    //le nombre de resultats doit être = 1
    $donnees = $resultats->fetch(PDO::FETCH_OBJ);

// On charge les données issues de la requête
// dans des variables
//print_r($donnees); //débuguage
if ($donnees) { 
        $logindb=$donnees->login;//login de la base de données
        $pwddb=$donnees->mdp;
        $patient_id=$donnees->patient_id;

        //on test les valeurs du formulaire à ceux stochés en bdd
        if ($login===$logindb AND $password===$pwddb)
        {
          session_start(); //si tout s'est bien passé j'ouvre une session
          $_SESSION['patient_id']=$patient_id ; //et je stock l'id du patient en session
            header('Location: fiche_patient.php');
            exit();//ajout dernière modif
        }
            else {
           header('Location: ../index-p.php?error=error');
           exit();//ajout dernière modif
          }
        } else {
          header('Location: ../index-p.php?error=error');
          exit();
      }
    }




 ?>