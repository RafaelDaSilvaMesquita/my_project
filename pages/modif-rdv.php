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
<meta name="author" content="Rafael Da Silva" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
crossorigin="anonymous">

<link href="style.css" rel="stylesheet" type="text/css" media="all">
<link rel="icon" type="image/svg+xml" href="php.svg">

<title>Confirmation rendez-vous</title>
</head>
<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center"> 

            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4-week" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                </svg>
                Rendez-vous
            <h2>
            
        </div>
    </div>

    <div class="container">
        <h4 class="mb-3">Confirmer ou modifier le rendez-vous</h4>
        <p><?php echo $donnees->date1; ?></p>
        <form name="form1" method="post" action="traitement-rdvm.php">
            <div class="row g-3">
                <div class="col-sm-2">
                    <label for="date" class="form-label">Fin du rendez-vous</label>
                    <input type="datetime-local" name="date2" id="date2" class="form-control" 
                    required autofocus/>
                </div>

                <div class="col-sm-3">
                    <label for="lieu" class="form-label">Lieu du rendez-vous</label>
                    <input type="text" name="lieu" id="lieu" class="form-control" 
                    required autofocus/>
                </div>

                <div class="row g-3">
                    <div class="col-md-3">
                        <label for="statut" class="form-label">Statut du rendez-vous</label>
                        <select name="statut" id="statut" class="form-control">
                            <option value="0">Non-validé</option>
                            <option value="1">Confirmé</option>
                            <option value="2">Annulé</option>
                        </select>
                    </div>
                </div>

                <div class="col-1">
                    <input type="submit" name="Submit" value="Ok" 
                    class="btn btn-primary btn-lg btn-block"/>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                </div>
            </div>
        </form>
    </div>

<!--<article>

<h3>Modifier le rendez-vous</h3>
<p><//?php echo $donnees->date1; ?></p>

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
    <input type="hidden" name="id" value="<//?php echo $id; ?>" />

</form>

</article>-->

</body>
</html>


