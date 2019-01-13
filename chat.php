<?php

class chat {
    //attributs
    protected $nom;
    protected $age;
    protected $sexe;
    protected $couleur;

    //constant
    //sexe
    const sexe = [
        1 => "femelle",
        2 => "male"
    ];
    //couleur
    const couleur = ["blanc", "gris", "noir"];

    //setter
    public function setNom($nom) {
        if (strlen($nom) <= 15) {
            $this->nom = $nom;
        }
    }

    public function setAge(int $age) {
        if ($age < 30 && $age > 0) {
            $this->age = $age;
        }
    }

    public function setSexe($sexe) {
        if ($sexe = self::sexeF || $sexe = self::sexeM) {
            $this->sexe = self::sexe[$sexe];
        }
    }

    public function setCouleur($couleur) {
        if (isset(self::couleur[$couleur])) {
            $this->couleur = self::couleur[$couleur];
        }
    }

    //getter
    public function getNom() {
        return $this->nom;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function hydrate($db) {
        foreach ($db as $key => $value) {
            $method = "set" . ucfirst($key);
            if (method_exist($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function addChat($db) {
        $req = $db->prepare("INSERT INTO exoPOO (nom, age, sexe, couleur) VALUE (:nom, :age, :sexe, :couleur");
        $resultat = $req->execute([
            "nom" => $chat["nom"],
            "age" => $chat["age"],
            "sexe" => $chat["sexe"],
            "couleur" => $chat["couleur"]
        ]);
    }

    public function __construct($req) {
        $this->hydrate($db);
    }

    public function chatManager() {
        $db = new PDO('mysql:host=localhost;dbname=exoPOO', "phpmyadmin", "hanane");
        $req = $db->query("SELECT * FROM exoPOO");
        return $result = $req->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>