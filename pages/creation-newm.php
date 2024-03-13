<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<title>Création</title>
</head>
<body>
<header>
    <h1>Création du médecin</h1>
   

</header>
<article>

<div><h1>Entrer les informations du médecin</h1></div>

<form name="form1" method="post" action="traitement_newm.php">
   <p><label for="nom">Nom</label>
   <input type="text" name="nom" autofocus required
    maxlength="120"/></p>

   <p><label for="prenom">Prenom</label>
   <input type="text" name="prenom" required
    maxlength="120"></p>
    
    <p><label for="login">Login patient</label>
   <input type="text" name="login" required
    maxlength="40"></p>

    <p><label for="password">Mot de passe</label>
   <input type="password" name="password" required
    maxlength="50"></p>

    <p><label for="domaine">Domaine</label>
   <select name="domaine">
   <option value="0">choisir</option>
    <option value="chirurgien">chirurgien</option>
    <option value="cardiologue">cardiologue</option>
    <option value="orthopediste">orthopediste</option>
    </select>
   </p>

    <p><label for="numero_telephone">Numero de téléphone</label>
   <input type="text" name="numero_telephone" required
    maxlength="15"></p>

    <p><label for="email">Email</label>
   <input type="text" name="email" required
    maxlength="120"></p>
   
   <input type="submit" name="Submit" value="Ok" />

 </form>

</article>
</body>
</html>