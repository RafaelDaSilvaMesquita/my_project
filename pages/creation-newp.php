<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<title>Création</title>
</head>
<body>
<header>
    <h1>Création du patient</h1>
   

</header>
<article>

<div><h1>Entrer les informations du patient</h1></div>

<form name="form1" method="post" action="traitement-newp.php">
   <p><label for="nom">Nom</label>
   <input type="text" name="nom"  required autofocus
    maxlength="120"/></p>

   <p><label for="prenom">Prenom</label>
   <input type="text" name="prenom"  required
    maxlength="120"></p>

   <p><label for="date_naissance">Date de naissance</label>
   <input type="date" name="date_naissance" id="date_naissance" required></p>
    
   <p><label for="genre">Genre</label><br />
   <input type="radio" name="genre" value="0">Féminin<br />
   <input type="radio" name="genre" value="1">Masculin<br /></p>
    
    <p><label for="login">Login patient</label>
   <input type="text" name="login"  required
    maxlength="40"></p>

    <p><label for="password">Mot de passe</label>
   <input type="password" name="password" required
    maxlength="50"></p>
   
   <input type="submit" name="Submit" value="Ok" />

 </form>

</article>
</body>
</html>