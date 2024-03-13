<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <title>films</title>
    <link href="style/style.css" rel="stylesheet" />
    </head>
    <body>
        <h1>Mes films</h1>
        <?php
        foreach($films as $film)
        {
        ?>
          <div class="listfilm">
              <h3>
                  <?php echo $film['titre']; ?>
                  <mark>sorti en <?php echo $film['datesortie']; ?></mark>
              </h3>
              <a href="acteurs.php?film=<?php echo $film['id']; ?>">acteurs</a>

          </div>
        <?php
        }
        ?>
    </body>
</html>
