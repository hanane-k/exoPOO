<?php
//exo 3
class hanane {
    //attributs
    protected $nom;
    protected $prenom;
    protected $adresse;


    //setter
    public function setNom($nom) {
        $this->nom = $nom;
    }
    //setter
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    //setter
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    //getter
    public function getNom() {
        return $this->nom;
    }
    
    //getter
    public function getPrenom() {
        return $this->prenom;
    }
    
    //getter
    public function getAdresse() {
        return $this->adresse;
    }

    //getter
    public function getCoord() {
        return "la personne  : " . $this->nom . " " . $this->prenom . " habite à : " . $this->adresse . "<br>";
    }
    
    //constructeur

    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $method = "set" . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
        
// var_dump($data);

    }

    public function __construct(array $data) {
        $this->hydrate($data);
    }
    public function __destruct() {
    echo "cette fonction va être détruite!!";
    }

}


?>


