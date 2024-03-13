<html>
<head>
<link href="style.css" rel="stylesheet"  media="all">
<link href="chartist/chartist.css" rel="stylesheet"  media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-5-image</title>
<style media="screen">
.ct-series-a .ct-slice-pie {
  fill: orange;
}

.ct-series-a .ct-bar{
  stroke: teal;
}



</style>
</head>
<body>
<header>
    <div><h1>PHP-7-Images</h1></div>
    <nav>
        <a href="9-fusion.php">9 fusion </a>
        <a href="10-affichefusion.php">10 Affiche fusion</a>
        <a href="11-redim.php">11 redimention</a>
        <a href="12-svg.php">svg</a>
    </nav>

</header>
  <article>
    Graph<br />
    <?php
    ?>
    <div class="toto">

    </div>
  </article>

<script src="chartist/chartist.js"></script>
<script>
<?php $donnee=8; ?>
// Create a simple bi-polar bar chart
  var chart = new Chartist.Bar('.toto', {
    labels: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10'],
    series: [
      [<?php echo $donnee; ?>, 2, 4, 8, 6, -2, -1, -4, -6, -2]
    ]
  }, {
    high: 10,
    low: -10,
    axisX: {
      labelInterpolationFnc: function(value, index) {
        return index % 2 === 0 ? value : null;
      }
    }
  });
  // Listen for draw events on the bar chart
  chart.on('draw', function(data) {
    // If this draw event is of type bar we can use the data to create additional content
    if(data.type === 'bar') {
      // We use the group element of the current series to append a simple circle with the bar peek coordinates and a circle radius that is depending on the value
      data.group.append(new Chartist.Svg('circle', {
        cx: data.x2,
        cy: data.y2,
        r: Math.abs(Chartist.getMultiValue(data.value)) * 2 + 5
      }, 'ct-slice-pie'));
    }
  });

</script>
</body>
</html>
