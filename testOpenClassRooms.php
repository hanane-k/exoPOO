<?php

class Personnage

{

  private $_force = 10;

  private $_localisation = "lille";

  private $_experience = 4;

  private $_degats = 2;


  public function __construct($force, $degats) // Constructeur demandant 2 paramètres

  {

    echo 'Voici le constructeur !'; // Message s'affichant une fois que tout objet est créé.

    $this->setForce($force); // Initialisation de la force.

    $this->setDegats($degats); // Initialisation des dégâts.

    $this->_experience = 1; // Initialisation de l'expérience à 1.

  }


  // Mutateur chargé de modifier l'attribut $_force.

  public function setForce($force)

  {

    if (!is_int($force)) // S'il ne s'agit pas d'un nombre entier.

    {

      trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);

      return;

    }


    if ($force > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.

    {

      trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);

      return;

    }


    $this->_force = $force;

  }


  // Mutateur chargé de modifier l'attribut $_degats.

  public function setDegats($degats)

  {

    if (!is_int($degats)) // S'il ne s'agit pas d'un nombre entier.

    {

      trigger_error('Le niveau de dégâts d\'un personnage doit être un nombre entier', E_USER_WARNING);

      return;

    }


    $this->_degats = $degats;

  }

}
echo "hello";

$perso1 = new Personnage(60, 0); // 60 de force, 0 dégât
$perso2 = new Personnage(100, 10); // 100 de force, 10 dégâts

?>

<?php

class hanane {

    //attributs
    private static $_compteur = 0;

    //methode
    public function __construct() {
        self::$_compteur++;
    }

    public static function getCompteur() {
        return self::$_compteur;
    }
}

$test1 = new hanane;
$test2 = new hanane;
$test3 = new hanane;
$test4 = new hanane;
$test5 = new hanane;

echo hanane::getCompteur() . "<br>";
?>