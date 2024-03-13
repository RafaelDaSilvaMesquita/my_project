<?php
include '../connexion.php';
 if( isset( $_POST['login'] ))
 {//echo ( $_POST['login'] );
   $login= htmlentities( $_POST['login'], ENT_QUOTES, "utf-8");}


 if( isset( $_POST['password']))
 {$password = sha1($_POST['password'].SALT);
    $sql = "SELECT login, mdp, admin_id FROM admin
    WHERE login='$login' AND mdp='$password' ";
$resultats = $bdd->query($sql);
    echo $sql;
// die();
    //var_dump($bdd);
    //echo $count;
    //le nombre de resultats doit être = 1
    $donnees = $resultats->fetch(PDO::FETCH_OBJ);

// On charge les données issues de la requête
// dans des variables
print_r($donnees);
        $logindb=$donnees->login;//login de la base de données
        $pwddb=$donnees->mdp;
        $admin_id=$donnees->admin_id;

        if ($login===$logindb AND $password===$pwddb)
        {
          session_start();
          $_SESSION['admin_id']=$admin_id ;
            header('Location: liste-admin.php');
        }
            else {
           header('Location: ../index-a.php?error=error');
            }
    }




 ?>