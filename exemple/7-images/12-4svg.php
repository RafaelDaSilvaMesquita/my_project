<html>

<head>
  <link href="style.css" rel="stylesheet" media="all">
  <meta name="author" content="Stephane Brunet" />
  <link rel="icon" type="image/svg+xml" href="php.svg">
  <title>PHP-5-image</title>
  <style media="screen">
    .orange:hover {
      fill: black;
    }
  </style>
</head>

<body>
  <header>
    <div>
      <h1>PHP-7-Images</h1>
    </div>
    <nav>
      <a href="9-fusion.php">9 fusion </a>
      <a href="10-affichefusion.php">10 Affiche fusion</a>
      <a href="11-redim.php">11 redimention</a>
      <a href="12-svg.php">svg</a>
    </nav>

  </header>
  <article>
    image sur image <br />
    <div style="width:40%;">
    <?php
      $coul="crimson";
      $texte="texte+30";
      if (date("s")>30)
        {$coul="teal";
        $texte="texte-30";}
    ?>
      <svg width="256px" height="144px" preserveAspectRatio="xMidYMid" version="1.1" viewBox="0 0 256 144"
        xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#"
        xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
        <path
           class="orange" d="m219.83 71.7-28.26-28.319 14.123-28.309 45.917 46.013c5.8504 5.8627 5.8504 15.368 0 21.231l-56.515 56.633c-5.8504 5.8627-15.336 5.8627-21.186 0-5.8504-5.8627-5.8504-15.368 0-21.231z"
          fill="#ff7f2a" />
        <path
          d="m173.92 4.3958c5.8504-5.8627 15.338-5.8602 21.189 0.00246l10.596 10.618-123.62 123.88c-5.8504 5.8627-15.338 5.8602-21.189-2e-3l-10.596-10.618zm-52.98 38.934-21.191 21.236-28.26-28.319-35.323 35.397 28.26 28.319-14.123 28.309-45.917-46.013c-5.8504-5.8627-5.8504-15.368 0-21.231l56.512-56.63c5.8504-5.8627 15.338-5.8651 21.189-0.00246z"
          fill="#151618" />
        <rect id="carre" transform="rotate(-45)" x="87.303" y="188.9" width="15.063" height="15.063" fill="<?php echo $coul;?>" />
        <text transform="rotate(-44.998)" x="-7.2248607" y="156.10031" fill="#ff6600" font-family="Broadway"
          font-size="29.333px" xml:space="preserve">
          <tspan x="-7.2248607" y="156.10031" font-size="29.333px"><?php echo $texte;?></tspan>
        </text>
      </svg>
    </div>
    <div style="width:40%" ;>
      <?php
      $heure = date("h-i-s");
      include('img/mps.svg');
      ?>
    </div>
  </article>

</body>

</html>