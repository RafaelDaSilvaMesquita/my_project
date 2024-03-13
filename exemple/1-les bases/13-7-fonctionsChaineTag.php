<html>

<head>
    <link href="style.css" rel="stylesheet" type="text/css" media="all">
    <meta name="author" content="Stephane Brunet" />
    <meta charset="utf-8">
    <title>PHP-1-Les fonctions Chaine</title>
</head>

<body>
    <header>
        <div>
            <h1>PHP-1-Les bases</h1>
        </div>
        <nav>
            <a href="13-6-fonctionsChaineprintf.php"> 13 Chaineprint</a>
            <a href="#"> 13 Chaine tag</a>
            <a href="13-7-fonctionsDate.php"> 13 Ft Date</a>
        </nav>

    </header>


    <article>


        <?php
        $chaine = "<p>Voici une <b> chaîne <b>de test</b>
<!-- et un commentaire --></p>
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>";
        echo $chaine . "<br />";
        echo strip_tags($chaine);
        echo '<br /><br />'; // Voici une chaîne de test
        
        $chaine2 = "<p><strong>Travailler sur du PHP </strong> <br />c'est <b>vraiment sympa</b>!
<!-- et un commentaire --></p>
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>";
        //on autorise les balises <p> et <b>
        echo (strip_tags($chaine2, "<p><b><strong>"));

        // echo(strip_tags($chaine2,['p', 'b']));
        echo '<br /><br />';
        echo substr(strip_tags($chaine2), 0, 14);
        ?>

    </article>
</body>

</html>