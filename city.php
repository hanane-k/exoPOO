<?php

class city {
    //attribut
    protected $_nom;
    protected $_departement;

    // methode
    //     setter
        public function setNom($nom) {
            $this->_nom = $nom;
        }
        //getter
        public function getNom() {
            return $this->_nom;
        }
        //setter
        public function setDepartement($departement) {
            $this->_departement = $departement;
        }
        //getter
        public function getDepartement() {
            return $this->_departement;
        }
        public function showLocation() {
            $result = "la ville de : " . $this->_nom . " est dans le departement : " . $this->_departement;
            return $result;
        }

        //exo 2
        public function __construct(array $data) {
            $this->hydrate($data);
            // $this->setDepartement($departement);
        }
        public function hydrate(array $data) {
            foreach ($data as $key => $value) {
                $method = "set".ucfirst($key);
                if (method_exists($this, $method)) {
                    $this->$method($value);
                }
                // var_dump($value);
            }

        }
}

?>