<?php

include_once('connexion.php');

if (isset($_GET['section']) OR $_GET['section'] == 'index')
// faut test on peut creer un lien http://monsite/index.php?section=index
{
  include_once('controleur.php');
}
