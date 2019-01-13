<?php

class clio {
    protected $porte;
    protected $couleur;
    protected static $prix = 10000;

    //constantes
    //porte
    const porte3 = 3;
    const porte5 = 5;
    //couleur
    const couleur = [
        "bleu nuit" =>  213800058,
        "rouge" => 213800059,
        "gris" => 213800060,
        "noir" => 213800061,
        "blanc" => 213800062,
        "moutard" => 213800063,
        "gris foncé" => 213800064,
        "vert" => 213800065
      ];
    //setter
    public function setPorte($porte) {
        if ($porte === self::porte3 || $porte === self::porte5) {
            $this->porte = $porte;
        }
    }
    public function setCouleur(string $couleur) {
        if (isset(self::couleur[$couleur])) {
            $this->couleur = self::couleur[$couleur];
        }
    }
    public function setPrix(int $prix) {
        self::$prix = $prix;
    }

    //getter
    public function getPorte() {
        return $this->porte;
    }
    public function getCouleur() {
        return $this->couleur;
    }
    public static function getPrix() {
        return self::$prix;
    }

    // //constructeur
    public function __construct($porte, $couleur) {
        $this->setPorte($porte);
        $this->setCouleur($couleur);
    }

}

?>