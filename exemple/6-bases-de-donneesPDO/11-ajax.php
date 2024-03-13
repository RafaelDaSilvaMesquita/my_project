<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<meta charset="utf-8">
<title>PHP-5-base de données</title>
</head>
<body>
<header>
    <div><h1>PHP-5-BDD</h1></div>
    <nav>
      <a href="9-json-encode.php">9 encode</a>
      <a href="10-xml.php">10 xml</a>
      <a href="11-ajax.php">11 Ajax</a>
    </nav>

</header>

<form>
  <fieldset style="width: 500px">
    <legend>Liste liées</legend>
    <label>film</label>
    <select name='film' id='film' onchange='go()'>
      <option value='-1'>Choisir</option>
      <?php
      include("1-connexion.php");
        $sql = "SELECT DISTINCT film, film_id FROM ajax ORDER BY film";

        $resultats = $bdd->query($sql);;
        while($row = $resultats->fetch(PDO::FETCH_OBJ)){
          echo "<option value='".$row->film_id."'>".$row->film."</option>\n";
        }
      ?>
    </select>
    <label>acteur</label>
    <div id='acteur' style='display:inline'>
    <select name='acteur'>
      <option value='-1'>Choisir</option>
    </select>
    </div>
  </fieldset>
</form>
    <script>
			function getXhr(){
          var xhr = null;
				if(window.XMLHttpRequest) // Firefox et autres
				   xhr = new XMLHttpRequest();
				else if(window.ActiveXObject){ // Internet Explorer
				   try {
			                xhr = new ActiveXObject("Msxml2.XMLHTTP");
			            } catch (e) {
			                xhr = new ActiveXObject("Microsoft.XMLHTTP");
			            }
				}
				else { // XMLHttpRequest non supporté par le navigateur
				   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
				   xhr = false;
				}
        return xhr;
			}
			/**
			* Méthode qui sera appelée sur le click du bouton
			*/
			function go(){
				var xhr = getXhr();
				// On défini ce qu'on va faire quand on aura la réponse
				xhr.onreadystatechange = function(){
					// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
					if(xhr.readyState == 4 && xhr.status == 200){
						leselect = xhr.responseText;
						// On se sert de innerHTML pour rajouter les options a la liste
						document.querySelector('#acteur').innerHTML = leselect;
					}
				}

				// Ici on va voir comment faire du post
				xhr.open("POST","ajaxacteur.php",true);
				// ne pas oublier ça pour le post
				xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				// ne pas oublier de poster les arguments
				// ici, l'id de l'auteur
				sel = document.querySelector('#film');
				idfilm = sel.options[sel.selectedIndex].value;
				xhr.send("idfilm="+idfilm);
			}
		</script>
	</body>
</html>
