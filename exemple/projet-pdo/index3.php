<?php include("pages/connexion.php");

$sql = "select annee, descript from quinte ";
$annee = mysqli_query($bdd, $sql);

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>projet php Formation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="projet php Formation" />
       
        <meta name="author" content="Stephane Sources Codrops" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/chartist.min.css" />
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<script type="text/javascript" src="js/Chartist.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/nojs.css" />
		</noscript>
    </head>
    <body>
        <div class="container">
			
			<header>
				<h1>Diapo avec graph <span>avec CSS3 PHP et jQuery</span></h1>
				<h2>Entete Diaporama avec les chiffres</h2>
				
			</header>
			<div id="da-slider" class="da-slider">
			<?php

while($donnees = mysqli_fetch_assoc($annee))
{           $pres='chiffres';
			$oy=date('Y');
			$anneeac = $donnees['annee'];
			if($donnees['annee']<$oy){$pres='chiffres';} else {$pres='prévisions';}
				echo'<div class="da-slide">
					<h2>'.$pres.' '. $donnees['annee'].'</h2>
					<p>'. $donnees['descript'].'</p>
					<a href="#" class="da-link">En savoir +</a>';
				echo '<div class="da-img"><div class="ct-perfect-fourth" id="t'.$anneeac.'"></div></div></div>';
			}

?>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
        </div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider();
				
			});
			new Chartist.Bar('#t2000', {
  labels: ['First quarter of the year', 'Second quarter of the year', 'Third quarter of the year', 'Fourth quarter of the year'],
  series: [
    [60000, 40000, 80000, 70000],
    [40000, 30000, 70000, 65000],
    [8000, 3000, 10000, 6000]
  ]
}, {
  seriesBarDistance: 10,
  axisX: {
    offset: 60
  },
  axisY: {
    offset: 80,
    labelInterpolationFnc: function(value) {
      return value + ' CHF'
    },
    scaleMinSpace: 15
  }
});
new Chartist.Bar('#t2005', {
labels: ['Last quarter of the year', 'Second quarter of the year', 'Third quarter of the year', 'Fourth quarter of the year'],
series: [
[60000, 40000, 80000, 70000],
[40000, 30000, 70000, 65000],
[8000, 3000, 10000, 6000]
]
}, {
seriesBarDistance: 10,
axisX: {
offset: 60
},
axisY: {
offset: 80,
labelInterpolationFnc: function(value) {
return value + ' CHF'
},
scaleMinSpace: 15
}
});
		</script>	
    </body>
</html>