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
        <a href="10-droits.php">10 droits</a>
        <a href="13-connexion.php">11 methodes magiques</a>
        <a href="12-objets-reserves.php">12 reserves</a>
    </nav>

</header>
<article>
  Une méthode magique est une méthode qui, si elle est présente dans votre classe,
   sera appelée lors de tel ou tel évènement<br/ >
   ex : __construct().
   <h5>La surcharge magique des attributs et méthodes</h5>
   La surcharge magique d'attributs ou méthodes consiste à créer dynamiquement <br />
    des attributs et méthodes. <br />
    __set  et  __get

  <?php
    class Version
    {
      private $unAttributPrive;
      
      public function __set($nom, $valeur)
      {
        echo 'Ah, on a tenté d\'assigner à l\'attribut <strong>', $nom,
        '</strong> la valeur <strong>', $valeur, '</strong> mais c\'est pas possible !<br />';
      }
    }
    $obj = new Version;
    $obj->attribut = 'Simple test';
    $obj->unAttributPrive = 'Autre simple test';

    //echo( $obj->attribut);
  ?>
  <?php

  class MaClasse
    {
      private $unAttributPrive;
      public function __get($nom)
      {
        return 'Impossible d\'accéder à l\'attribut <strong>' . $nom . '</strong>,
        désolé !<br />';
      }
    }
  $obj = new MaClasse;
  echo $obj->attribut;
  echo $obj->unAttributPrive;
?>
<?php

class Kid {
/**
 * Age du kid
 * @var int
 * @access private
 */
private $age;
/**
 * Methode magique __get()
 * Retourne la valeur de la propriété appelée
 * @param string $property
 * @return int $age
 * @throws Exception
 */
public function __get($property) {
  if('age' === $property) {
    return $this->age;
  } else {
    throw new Exception('Propriété invalide !');
  }
}
/**
 * Methode magique __set()
 * Fixe la valeur de la propriété appelée
 * @param string $property
 * @param mixed $value
 * @return void
 * @throws Exception
 */
public function __set($property,$value) {

  if('age' === $property && ctype_digit($value)) {
    $this->age = (int) $value;
  } else {
    throw new Exception('Propriété ou valeur invalide !');
  }
 }
}
?>
__isset  __unset <br />
a première méthode__issetest appelée lorsque l'on appelle la fonction isset
sur un attribut qui n'existe pas ou auquel on n'a pas accès.<br />
La fonction unset() sert à détruire une variable.<br />
<?php
  class Humain{
    protected $nom;
    public function __contruct($nouveauNom)
      {
        $this->nom = $nouveauNom;
      }
      public function getNom(){
        return $this->nom;
      }
  }
  class Europeen extends Humain {
    public $nomE;
    public function __construct($pays, $nomfamille){
      $this->pays = $pays;
      $this->nomE = $nomfamille;
    }
    public function __isset($test){
      echo 'La propriete '.$test.' est inaccessible.<br />';
    }
    public function __unset($test){
      echo 'unset() a été appelé sur une propriete inaccessible.<br />';
    }
  }
    $citoyen = new Europeen('Belgique', 'Hugo Pratt');

    var_dump(isset($citoyen->age));
    echo '<br />';

    var_dump(isset($citoyen->nomE));
    echo $citoyen->nomE;
    echo '<br />';
    unset($citoyen->nomE);
    var_dump(isset($citoyen->nomE));
 ?>

__call<br />
La méthode__callsera appelée lorsque l'on essayera d'appeler une telle méthode.
Elle prend deux arguments : le premier est le nom de la méthode que l'on a essayé d'appeler et
le second est la liste des arguments qui lui ont été passés (sous forme de tableau).
    <?php

    class AppelInconnu
    {
      public function __call($nom, $arguments)
      {
        echo 'La méthode <strong>', $nom, '</strong> a été appelée alors qu\'elle n\'existe pas !
        Ses arguments étaient les suivants : <strong>',
        implode($arguments, '</strong>, <strong>'), '</strong>';
      }
    }
    $obj = new AppelInconnu;
    $obj->methode(123, 'test');
    ?>
</article>
</body>
</html>
