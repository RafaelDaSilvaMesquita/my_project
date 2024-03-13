
<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<meta charset="UTF-8">
<title>PHP-1-Les fonctions Date</title>
</head>
<body>
<header>
    <div><h1>PHP-1-Les bases</h1></div>
    <nav>
        <a href="13-6-fonctionsChaineprintf.php"> 13 Ft chaine</a>
        <a href="13-7-fonctionsDate.php"> 13 Ft date</a>
        <a href="13-8-fonctionshashage.php"> 13 Ft Hash</a>
    </nav>

</header>


<article>


<?php
echo $oy=date("Y-m-d H:i:s").'<br />';
echo date("j, m, Y");
echo'<br />';
echo 'jour de l\'ann&eacute;e : '.date("z");
echo'<br />';
//strftime("%A %d %B %Y", strtotime("05/11/2013"))
echo $utf8_string = mb_convert_encoding(date("D d M Y", strtotime("12/11/2013")), 'UTF-8', 'ISO-8859-1');
//echo utf8_encode(date("D d M Y", strtotime("12/11/2013")));
//strftime deprecated en php8.1
$date=strftime("%A %d %B %Y", strtotime("12/11/2013")) ;

echo $date.'<br />';

$lastday = date('d-m', strtotime("third monday of this month"));
echo 'troisi&egrave;me lundi du mois '.$lastday.'<br />';

$tomorrow  = mktime(0, 0, 0, date("m"), date("d")+1, date("Y"));
echo 'demain : '.date ("d/m/Y", $tomorrow);
echo'<br />';
$lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
echo 'le mois dernier : '.date ("d/m/Y", $lastmonth);
echo'<br />';
$nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);
echo 'l\'ann&eacute;e prochaine : '.date ("d/m/y", $nextyear);

echo'<br />';

setlocale (LC_TIME, 'FR-fr');
echo 'locale '.$date.'<br />';
//$mon_local=setlocale (LC_TIME, 'fr','fr_FR','fr_FR@euro','fr_FR.utf8','fr-FR','fra');
//echo $mon_local;

setlocale(LC_ALL, 'fr_FR.UTF-8');
echo (date("D d M Y"));

echo'<br />';
setlocale (LC_TIME,  'fr_FR');
echo 'locale2 '. mb_convert_encoding(date("D d M Y"), 'UTF-8', 'ISO-8859-1');


echo'<br />';

$dateFrom = new DateTime('2012-12-16 12:45:32');
$dateNow = new DateTime();
$interval = $dateNow->diff($dateFrom);
//Différence entre les 2 dates : 4 ans 9 mois 18 jours 1 heures 12 minutes 33 secondes
echo($interval->format('%y ans %m mois %d jours %h heures %i minutes %s secondes'));
echo'<br />';
$date = new DateTime('2017-12-31');
echo $date->format('Y-m-d');
$interval = new DateInterval('P1M');
echo'<br />';
$date->add($interval);
echo $date->format('Y-m-d') . "\n";

?>
</article>
<time>Valeur écrasée</time>
<time class="deux">Valeur écrasée</time>


<script>
let seizedec=new Date(Date.UTC(<?php echo $dateFrom->format('Y,m-1,d') ?>));
// -1 : janv=mois 0 en js et janv=mois 1 en php !!
document.querySelector('time').textContent=new Intl.DateTimeFormat('fr-FR', {weekday: 'short',
day:'numeric', month:'long'}).format(seizedec)
document.querySelector('.deux').textContent=new Intl.DateTimeFormat('th-TH', {weekday: 'long',
day:'numeric', month:'short'}).format(seizedec)
</script>

</body>
</html>