<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-5-image</title>
<style media="screen">
  #mps:hover #blue{
    fill:transparent;
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
  image sur image <br />
    <div  style="width:40%;">
      <svg width="256px" height="256px" id="mps" preserveAspectRatio="xMidYMid" version="1.1" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
       <defs>
        <linearGradient id="mpsLinearGradient-1" x1="193.79" x2="-49.835" y1="340.27" y2="28.245" gradientUnits="userSpaceOnUse">
         <stop stop-color="#087CFA" offset=".06"/>
         <stop stop-color="#21D789" offset=".87"/>
        </linearGradient>
        <linearGradient id="mpsLinearGradient-2" x1="318.49" x2="231.77" y1="167.68" y2="-53.465" gradientTransform="scale(.70875 1.4109)" gradientUnits="userSpaceOnUse">
         <stop stop-color="#087CFA" offset=".05"/>
         <stop stop-color="#0A84F0" offset=".18"/>
         <stop stop-color="#1099D6" offset=".39"/>
         <stop stop-color="#19BAAD" offset=".67"/>
         <stop stop-color="#21D789" offset=".87"/>
        </linearGradient>
        <linearGradient id="mpsLinearGradient-3" x1="208.58" x2="257.32" y1="161.73" y2="-33.59" gradientTransform="scale(.81922 1.2207)" gradientUnits="userSpaceOnUse">
         <stop stop-color="#21D789" offset=".12"/>
         <stop stop-color="#6AE274" offset=".36"/>
         <stop stop-color="#A9EB62" offset=".58"/>
         <stop stop-color="#D6F255" offset=".77"/>
         <stop stop-color="#F2F64D" offset=".92"/>
         <stop stop-color="#FCF84A" offset="1"/>
        </linearGradient>
       </defs>
       <polygon points="127.4 127.66 1.5158e-14 0 0 256 256 256" fill="url(#mpsLinearGradient-1)"/>
       <polygon id="blue" points="256 0 256 256 127.4 127.66" fill="url(#mpsLinearGradient-2)"/>
       <polygon points="256 0 191.57 191.62 127.4 127.66" fill="url(#mpsLinearGradient-3)"/>
       <text x="20.930819" y="216.82179" fill="#ffff00" font-size="29.333px" xml:space="preserve">
         <tspan x="20.930819" y="216.82179" font-family="lato" font-size="30px"><?php echo date("Y-m-d");?></tspan>
       </text>
      </svg>
    </div>
    <div style="width:40%";>
      <?php
      $heure=date("h-i-s");
      include('img/mps.svg');
      ?>
    </div>
  </article>

</body>
</html>
