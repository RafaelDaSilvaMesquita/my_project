<html>
<?php

$img = "img/monetier.JPG";

    if($exif = exif_read_data($img,0, true))
    {
       foreach ($exif as $key => $section)
       {
          foreach ($section as $name => $value)
          {
              echo "$key.$name: $value<br />\n";
          }
       }
       var_dump($exif);
    }
?>
</html>
