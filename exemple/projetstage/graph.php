<?php
include("connexion.php");
//Ce fichier permet de créer un graphique à partir des données en base
//----------------------------------------------------------------------------------------

//Récupération des chiffres du graphique
$annee = null;
if (isset($_GET['annee']))
{
	$annee = $_GET['annee'];
}
$sql = "SELECT coul, valeur, legende
FROM resultats
WHERE quinte_annee=$annee
ORDER BY ordre";
$resultat = mysqli_query($bdd,$sql);
$nb_histo = mysqli_num_rows($resultat);

//Création de l'image
$largeur = 200;
$hauteur = 200;
$image = imagecreate($largeur,$hauteur);
// Allocation de la couleur de fond
$gris = imagecolorallocate($image,207,207,207);

//Parcours des données pour créer le graphique
$i=0;
$j=0;
$largeur_branche = floor(200 / $nb_histo);
$space= ($largeur - ($largeur_branche * $nb_histo)) / 2;
//$font = 'adam.ttf';
$font = realpath('adam.ttf');
while($donnees = mysqli_fetch_assoc($resultat))
{
	$couleur = $donnees['coul'];
	$couleur_tab = explode(",", $couleur);
	$rouge = $couleur_tab[0];
	$vert = $couleur_tab[1];
	$bleu = $couleur_tab[2];
	$couleur_image = imagecolorallocate($image,$rouge,$vert,$bleu);

	$valeur = $donnees['valeur'];
	if ($i == 0)
	{$x1 = $space;}
	else
	{$x1 = $space + $i * $largeur_branche;}
	$y1 = $hauteur-$valeur;
	$x2 = $x1+$largeur_branche;
	$y2 = $couleur_image;
	imagefilledrectangle($image,$x1,$y1,$x2-10,$hauteur,$y2);

	// $couleur_texte = $donnees['couleur_texte'];
	// $couleur_tab = explode(",", $couleur_texte);
	// $rouge = $couleur_tab[0];
	// $vert = $couleur_tab[1];
	// $bleu = $couleur_tab[2];
	$couleur_legende = imagecolorallocate($image,255,0,0);
	$legende = $donnees['legende'];

	imagettftext($image, 8, 90, $x1 + floor(($x2-$x1)/2.5), 190, $couleur_legende, $font, $legende);
	$i++;
}

mysqli_free_result($resultat);

header ("Content-type:image/png");
imagepng($image);
imagedestroy($image);


?>
