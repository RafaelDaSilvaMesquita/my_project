<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Stephane Brunet" />
<meta charset="utf-8">
<title>PHP-6-Datas texte</title>
</head>
<body>
<header>
      <div><h1>PHP-6-Datas texte</h1></div>
    <nav>
      <a href="4-json.php">Lire un JSON</a>
      <a href="5-json.php">Ecrire un JSON</a>
      <a href="6-json.php">JSON client serveur</a>
    </nav>

</header>
<article>
  Venus sur la planet :<br />
  <?php
  ini_get('allow_url_fopen');

  $result=@file_get_contents('http://swapi.dev/api/planets/1/');

  $resultat=(array)json_decode($result);
  //var_dump($resultat);
  echo '<p class="star">'.$resultat["name"].'</p>';
  echo '<p class="star">'.$resultat["rotation_period"].'</p>';
  $peoples=(array)$resultat["residents"];
  //var_dump($peoples);
 foreach($peoples as $key=>$url)
  {
    $personnage=@file_get_contents($url);
    $personnage=(array)json_decode($personnage);
    echo ' <p class="starwars"> | '.$personnage["name"].' | '.$personnage["mass"].'</p><br />'."\n";
  }

?>
  <p class="meteo">
<?php const WEATHER = [
	0 => "Soleil",
	1 => "Peu nuageux",
	2 => "Ciel voilé",
	3 => "Nuageux",
	4 => "Très nuageux",
	5 => "Couvert",
	6 => "Brouillard",
	7 => "Brouillard givrant",
	10 => "Pluie faible",
	11 => "Pluie modérée",
	12 => "Pluie forte",
	13 => "Pluie faible verglaçante",
	14 => "Pluie modérée verglaçante",
	15 => "Pluie forte verglaçante",
	16 => "Bruine",
	20 => "Neige faible",
	21 => "Neige modérée",
	22 => "Neige forte",
	30 => "Pluie et neige mêlées faibles",
	31 => "Pluie et neige mêlées modérées",
	32 => "Pluie et neige mêlées fortes",
	40 => "Averses de pluie locales et faibles",
	41 => "Averses de pluie locales",
	42 => "Averses locales et fortes",
	43 => "Averses de pluie faibles",
	44 => "Averses de pluie",
	45 => "Averses de pluie fortes",
	46 => "Averses de pluie faibles et fréquentes",
	47 => "Averses de pluie fréquentes",
	48 => "Averses de pluie fortes et fréquentes",
	60 => "Averses de neige localisées et faibles",
	61 => "Averses de neige localisées",
	62 => "Averses de neige localisées et fortes",
	63 => "Averses de neige faibles",
	64 => "Averses de neige",
	65 => "Averses de neige fortes",
	66 => "Averses de neige faibles et fréquentes",
	67 => "Averses de neige fréquentes",
	68 => "Averses de neige fortes et fréquentes",
	70 => "Averses de pluie et neige mêlées localisées et faibles",
	71 => "Averses de pluie et neige mêlées localisées",
	72 => "Averses de pluie et neige mêlées localisées et fortes",
	73 => "Averses de pluie et neige mêlées faibles",
	74 => "Averses de pluie et neige mêlées",
	75 => "Averses de pluie et neige mêlées fortes",
	76 => "Averses de pluie et neige mêlées faibles et nombreuses",
	77 => "Averses de pluie et neige mêlées fréquentes",
	78 => "Averses de pluie et neige mêlées fortes et fréquentes",
	100 => "Orages faibles et locaux",
	101 => "Orages locaux",
	102 => "Orages fort et locaux",
	103 => "Orages faibles",
	104 => "Orages",
	105 => "Orages forts",
	106 => "Orages faibles et fréquents",
	107 => "Orages fréquents",
	108 => "Orages forts et fréquents",
	120 => "Orages faibles et locaux de neige ou grésil",
	121 => "Orages locaux de neige ou grésil",
	122 => "Orages locaux de neige ou grésil",
	123 => "Orages faibles de neige ou grésil",
	124 => "Orages de neige ou grésil",
	125 => "Orages de neige ou grésil",
	126 => "Orages faibles et fréquents de neige ou grésil",
	127 => "Orages fréquents de neige ou grésil",
	128 => "Orages fréquents de neige ou grésil",
	130 => "Orages faibles et locaux de pluie et neige mêlées ou grésil",
	131 => "Orages locaux de pluie et neige mêlées ou grésil",
	132 => "Orages fort et locaux de pluie et neige mêlées ou grésil",
	133 => "Orages faibles de pluie et neige mêlées ou grésil",
	134 => "Orages de pluie et neige mêlées ou grésil",
	135 => "Orages forts de pluie et neige mêlées ou grésil",
	136 => "Orages faibles et fréquents de pluie et neige mêlées ou grésil",
	137 => "Orages fréquents de pluie et neige mêlées ou grésil",
	138 => "Orages forts et fréquents de pluie et neige mêlées ou grésil",
	140 => "Pluies orageuses",
	141 => "Pluie et neige mêlées à caractère orageux",
	142 => "Neige à caractère orageux",
	210 => "Pluie faible intermittente",
	211 => "Pluie modérée intermittente",
	212 => "Pluie forte intermittente",
	220 => "Neige faible intermittente",
	221 => "Neige modérée intermittente",
	222 => "Neige forte intermittente",
	230 => "Pluie et neige mêlées",
	231 => "Pluie et neige mêlées",
	232 => "Pluie et neige mêlées",
	235 => "Averses de grêle",
];

$data = file_get_contents('https://api.meteo-concept.com/api/forecast/daily/3/period/2?token=0e913d3544655349504bc6073f9f951e10a96c34049f187af378a0eaa826a4dc&insee=67482');

if ($data !== false) {
	$forecast = json_decode($data)->forecast;

	print("Le temps prévu pour l'après-midi dans demain à Strasbourg  est : \"".WEATHER[$forecast->weather]."\".\n");
}
    ?>
  </p>
<br />
</article>
<script>
// Accès à la météo de Lyon avec la clé d'accès 50a65432f17cf542
// Exécute un appel AJAX GET

// Prend en paramètres l'URL cible et la fonction callback appelée en cas de succès

// function ajaxGet(url, callback) {
//     var req = new XMLHttpRequest();
//     req.open("GET", url);
//     req.addEventListener("load", function () {
//         if (req.status >= 200 && req.status < 400) {
//             // Appelle la fonction callback en lui passant la réponse de la requête
//             callback(req.responseText);
//         } else {
//             console.error(req.status + " " + req.statusText + " " + url);
//         }
//     });
//     req.addEventListener("error", function () {
//         console.error("Erreur réseau avec l'URL " + url);
//     });
//     req.send(null);
// }
// //https://api.meteo-concept.com/api/forecast/daily?token=0e913d3544655349504bc6073f9f951e10a96c34049f187af378a0eaa826a4dc&insee=38000
// ajaxGet("http://api.wunderground.com/api/50a65432f17cf542/conditions/q/France/Lyon.json", function (reponse) {
//     var meteo = JSON.parse(reponse);
//     // Récupération de certains résultats
//     var temperature = meteo.current_observation.temp_c;
//     var humidite = meteo.current_observation.relative_humidity;
//     var imageUrl = meteo.current_observation.icon_url;
//     // Affichage des résultats
//     var conditionsElt = document.createElement("div");
//     conditionsElt.textContent = "Il fait actuellement " + temperature +"°C et l'humidité est de " + humidite;
//     var imageElt = document.createElement("img");
//     imageElt.src = imageUrl;
//     var meteoElt = document.querySelector(".meteo");
//     meteoElt.appendChild(conditionsElt);
//     meteoElt.appendChild(imageElt);
// });

</script>
</body>
</html>
