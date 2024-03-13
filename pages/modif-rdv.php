<?php
$id=$_GET['id'];
include("../connexion.php");

$requete = "SELECT date1, date2, lieu, statut FROM rendezvous
WHERE numero=$id";
$resultats=$bdd->query($requete);
$donnees = $resultats->fetch(PDO::FETCH_OBJ)
?>

<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<title>Confirmation rendez-vous</title>
</head>
<body>
<header>
    <div><h1>Modification du rendez-vous</h1></div>
    <nav>

    </nav>

</header>
<article>

<h3>Modifier le rendez-vous</h3>
<p><?php echo $donnees->date1; ?></p>


<form method="post" action="traitement-rdvm.php">
    <p><label for="date">Fin du rendez-vous</label>
    <input type="datetime-local" name="date2" id="date2" required autofocus/></p>
    <p><label for="lieu">Lieu du rendez-vous</label>
    <input type="text" name="lieu" id="lieu" required autofocus/></p>
    <p><label for="statut">Statut du rendez-vous</label>
    <select name="statut" id="statut">
        <option value="0">Non-validé</option>
        <option value="1">Confirmé</option>
        <option value="2">Annulé</option>
    </select></p>

    <input type="submit" name="Submit" value="Ok" />
    <input type="hidden" name="id" value="<?php echo $id; ?>" />

</form>

</article>
</html>


