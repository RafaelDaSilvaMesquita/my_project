<?php
$requete = " SELECT annee, descript, lien
from quinte
ORDER BY annee
";

$resultats=$bdd->query($requete);
?>
