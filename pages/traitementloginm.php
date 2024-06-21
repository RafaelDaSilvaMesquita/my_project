<?php
include '../connexion.php';
 if( isset( $_POST['login'] ))
 {//echo ( $_POST['login'] );
   $login= htmlentities( $_POST['login'], ENT_QUOTES, "utf-8");}


 if( isset( $_POST['password']))
 {$password = sha1($_POST['password'].SALT);
    $sql = "SELECT login, mdp, medecin_id FROM medecin
    WHERE login='$login' AND mdp='$password' ";
$resultats = $bdd->query($sql);
    //echo $sql;
    //var_dump($bdd);
    //echo $count;
    //le nombre de resultats doit être = 1
    $donnees = $resultats->fetch(PDO::FETCH_OBJ);

// On charge les données issues de la requête
// dans des variables
//print_r($donnees);
if ($donnees) { 
        $logindb=$donnees->login;//login de la base de données
        $pwddb=$donnees->mdp;
        $medecin_id=$donnees->medecin_id;

        if ($login===$logindb AND $password===$pwddb)
        {
          session_start();
          $_SESSION['medecin_id']=$medecin_id ;
            header('Location: liste-rdvm.php');
            exit();//ajout dernière modif
        }
            else {
           header('Location: ../index-m.php?error=error');
           exit();//ajout dernière modif
            }
          }  else {
              header('Location: ../index-m.php?error=error');
              exit();
          }
    } 




 ?>