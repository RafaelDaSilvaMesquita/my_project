
<html>
<head>
<title> 1- Bases-Les boucles </title>
<link href="style.css" rel="stylesheet" media="all">
<style media="screen">
  article ol {
    padding: 2.1em;
  }
</style>
</head>
<body>
  <header>
      <div><h1>PHP-1-Les boucles</h1></div>
      <nav>
         <a href="16-les-boucles.php"> 16 Boucles</a>
          <a href="17-les-bouclesFor.php"> 17 boucles For</a>
          <a href="19-les-bouclesdo-while-html!.php">18  boucles do-while</a>
      </nav>


  </header>
  <article>
 Boucles Do while <br />
 <ol>
<?php
  $i = 4;
  do {
      echo '<li value="'.($i-4).'">'.$i.'</li>';
      $i++;
  } while ($i<9);
?>
</ol>
<ol reversed type="I" start="10">
<?php
 $i = 5;
 do {
     echo '<li>'.$i.'</li>';
     $i++;
 } while ($i<20);
?>
</ol>

</article>
</body>
</html>
