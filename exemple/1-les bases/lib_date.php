<?php
setlocale(LC_TIME, 'fr_FR.UTF8','fra','fr_FR');
date_default_timezone_set('Europe/Paris');
//echo utf8_encode(strftime('%A %d %B %Y, %H:%M'));

 $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);

 echo $formatter->format(time());
