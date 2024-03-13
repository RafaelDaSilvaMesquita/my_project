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
<article>
  <select id="films" name="films">
      <option value="">-- Film --</option>
  </select>

  <select id="acteurs" name="acteurs">
      <option value="">-- Acteurs--</option>
  </select>
</article>
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script>
    $(document).ready(function() {
      var $films = $('#films');
      var $acteurs = $('#acteurs');

      // chargement des régions
      $.ajax({
          url: 'film.php',
          data: 'go', // on envoie $_GET['go']
          dataType: 'json', // on veut un retour JSON
          success: function(json) {
              $.each(json, function(index, value) { // pour chaque noeud JSON
                  // on ajoute l option dans la liste
                  $films.append('<option value="'+ index +'">'+ value +'</option>');
              });
          }
      });

      // à la sélection d un film dans la liste
      $films.on('change', function() {
          var val = $(this).val(); // on récupère l'id du film

          if(val != '') {
              $acteurs.empty(); // on vide la liste des acteurs

              $.ajax({
                  url: 'film.php',
                  data: 'id_film='+ val, // on envoie $_GET['id_region']
                  dataType: 'json',
                  success: function(json) {
                      $.each(json, function(index, value) {
                          $acteurs.append('<option value="'+ index +'">'+ value +'</option>');
                      });
                  }
              });
          }
      });
    });
</script>
</body>
</html>
