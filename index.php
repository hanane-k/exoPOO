<?php

function chargerClasse($classe) {
   require $classe . ".php";
  }
spl_autoload_register("chargerClasse");


// exo 1
// $ville1 = new city("lille", "59");
// $ville2 = new city("roubaix", "59");
// $ville3 = new city("armentieres", "59");
// echo $ville1->showLocation();
// echo $ville2->showLocation();
// echo $ville3->showLocation();
// var_dump($ville1);


//exo 2
$ville = [
  "nom" => "lille",
  "departement" => "59"
];

$ville1 = new city($ville);
echo $ville1->showLocation() . "<br>";
// var_dump($ville1);


// //exo 3
$data = new hanane(
  [$data1 = 
  "nom" => "namoun",
  "prenom" => "amel",
  "adresse" => "alger"
], 
  [$data2 = 
  "nom" => "namoun",
  "prenom" => "hanane",
  "adresse" => "la chapelle d'armentieres"
]);
echo $data->getCoord();

// var_dump($data);


// exo 4
$form = new form("index.php");
$form->setText("name");
$form->setSubmit("OK");
$form->showForm();
// var_dump($_POST);


//exo 5

$auto1 = new clio(clio::porte3, "blanc");
echo "ma premiere voiture a : " . $auto1->getPorte() . " portes et elle est de la couleur : " . $auto1->getCouleur() . " elle fait : " . $auto1->getPrix() . " euros" . "<br>";
$auto2 = new clio(clio::porte5, "noir");
echo "ma deuxieme voiture a : " . $auto2->getPorte() . " portes et elle est de la couleur : " . $auto2->getCouleur() . " elle fait : " . $auto2->getPrix() . " euros" . "<br>";

//exo 6

$chatManager = new chat();
var_dump($req);

// $chatManager->setNom("hanane");
// echo $chatManager->getNom();


?>