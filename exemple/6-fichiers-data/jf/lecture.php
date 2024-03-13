<html>

<head>
  <meta charset="utf-8">
  <title>PHP-6-Datas texte</title>
</head>

<body>
  <header>
    <div>
      <h1>PHP-6-Datas texte</h1>
    </div>


  </header>
  <article>
    <?php

    $fichier = 'etudiant.xml';
    $xml = simplexml_load_file($fichier);
    //print_r( $xml->Table->Row[0]);
//die();
    $count = 0;
    for ($i = 0; $i < 150; $i++)
    //ou for ($i = 0; $i < 4; $i++)
    {
      $toto = $xml->Table->Row[$i]->Cell->Data[0];
      $toto2 = $xml->Table->Row[$i]->Cell[1]->Data[0];
      $toto3 = $xml->Table->Row[$i]->Cell[2]->Data[0];
      $toto4 = $xml->Table->Row[$i]->Cell[3]->Data[0];
      echo ($toto) . "\n" . '<br />';
      echo ($toto2) . "\n" . '<br />';
      echo ($toto3) . "\n" . '<br />';
      echo ($toto4) . "\n" . '<br /><br />';

      $totoetab = substr($toto, 3);
      $etab = '#0061#i';
      if (preg_match($etab, $totoetab)) {
        $count++;
      }

      //echo $xml->Table->Row[$i]['Cell'][0]['Data'].'<br />';
      //echo $xml->Table->Row[$i][1].'<br />';
    }
    echo 'nombre de resultats : ' . $count;
    ?>
  </article>
</body>

</html>