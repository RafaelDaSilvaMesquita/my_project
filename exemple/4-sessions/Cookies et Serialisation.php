<?php
if (isset($_COOKIE['mycook']) && $_COOKIE ['mycook']!=null){
$existant=$_COOKIE['mycook'];
$longueur=strlen($existant);
$longueur--;
$dernier=substr($existant,$longueur,1);
$dernier++;
$nouvCook='coucou'.$dernier;
setcookie("mycook",$nouvCook,time()+500*3600,null,null,false,true);
file_put_contents('FichierContent.txt',serialize($nouvCook));
}
else {
  $nouvCook='coucou1';
  setcookie("mycook",$nouvCook,time()+500*3600,null,null,false,true);
}

function CookRead($nomcook)
{
	sleep(5);
  $contenu=$_COOKIE[$nomcook];
  echo ('données venant du cookie : '.$contenu.'<br />');
}

if (isset($_COOKIE['mycook']))
  {
  CookRead('mycook');
  }

  if('FichierContent.txt'!=null) {
    $donnesRecup=unserialize(file_get_contents('FichierContent.txt'));
    echo ('données venant du fichier :'.$donnesRecup.'<br />');
  }
 ?>
