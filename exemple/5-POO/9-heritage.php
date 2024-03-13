<html>
<head>
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title>PHP-8-POO</title>
</head>
<body>
<header>
    <div><h1>PHP-8-POO</h1></div>
    <nav>
        <a href="8-constructeur.php">8 constructeur</a>
        <a href="9-heritage.php">9 heritage</a>
        <a href="9-1-try-catch.php">9 Try Catch</a>
    </nav>

</header>
<article>
  <?php
  class Membre{
    public $statut='adhérent';
  };
  class Admin extends Membre
    { private $niveauAcces='administrateur';
      public function pseudo()
      {echo 'super admin';}
      public function contact()
      { }
    }
    
  $toto =new Admin();
  echo $toto->statut.'<br />';
  $toto->pseudo();
  echo '<br />';
  if ($toto instanceof Admin)
  {echo "Il s'agit d'un admin" ;}
  else
  {echo "Il ne s'agit pas d'un admin";}
  echo '<br />';
  if ($toto instanceof Membre)
  {echo "Il s'agit d'un membre" ;}
  else
  {echo "Il ne s'agit pas d'un membre";}

  ?>

   comment empêcher quiconque d'instancier une classe parent<br />
   la méthode est de créer une classe héritant de la classe abstraite.
<?php
  abstract class Boisson // Notre classe Boisson est abstraite.
    {
      public $etat='liquide';
    }
  class Chocolat extends Boisson
  // Création d'une classe Chocolat héritant de la classe Boisson
    {
    }
  $submarino = new Chocolat;
  // Tout va bien, la classe Chocolat n'est pas abstraite.
  //$breuvage = new Boisson;
  // Erreur fatale car on instancie une classe abstraite.
 ?>
Classe finale <br />
Si une classe est finale, vous ne pourrez pas créer de classe fille héritant de cette classe.
<?php
  // Classe abstraite servant de modèle.
  abstract class Personnage
    {
    }
  // Classe finale, on ne pourra créer de classe héritant de Hero.
  final class Hero extends Personnage
    {
    }
  // Erreur fatale, car notre classe hérite d'une classe finale.
  //class GentilHero extends Hero
    {
    }
?>
Surcharger une méthode, ça veut dire que la méthode de la classe fille
aura plus de fonction que celle de la classe mère.
Problème, si on écrit dans la classe fille une méthode du même nom
que celle hérité de la classe mère et que l’on y met des instructions,
ça va faire comme si on définissait une nouvelle méthode, pas la surcharger.
Pour ça, il faut donc appeler à l’intérieur de cette méthode
la méthode de la classe mère avant de lui adjoindre de nouvelles instructions
<?php
  class MaClasseParent {
    private $attributMere;
    public function superMethode() {
      // cette fonction fait des trucs
      // …
    }
  }

  class MaClasseFille extends MaClasseParent  {
    // attribut unique à la méthode fille
      private $_monAttribut;
      public function nouvelleMethode() {
        //méthode qui ajoute des fonctions à la classe fille
      }
      public function superMethode() {
        //méthode qui ajoute des fonctions à la classe fille
        //on appelle d'abord la méthode de la classe mère
        // pour ne pas écraser les instructions de celle-ci
        parent::superMethode();
        //maintenant on en ajoute d'autre
      }
    }
?>

</body>
</html>
