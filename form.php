<?php
// exo 4

class form {
    // attributs
    protected $formContent;
    
    //text
    public function setText($nom) {
        $this->formContent .= "<input type='text' name=$nom>";
    }

    //le bouton
    public function setSubmit($value) {
        $this->formContent .= "<input type='submit' value=$value></form>";
    }
    
    public function showForm() {
        echo $this->formContent;
    }

    //constructeur
    public function __construct($action) {
       $this->formContent = "<form action=$action method='post'>";
    }

    // public function __destruct() {
    //     echo "cette fonction va être détruite!!";
    // }
}

?>