<?php
require_once "Cercle.class.php";

class Sphere extends Cercle {

    public function __construct($diametre){
        parent::__construct($diametre);
    }

    public function circonferenceSphere(){
        $circonference = pi() * $this->diametre;
        return "La circonférence de la sphère est de : " . round($circonference,2) . "cm <br>";
    }

    public function volumeSphere(){
        $rayon = $this->diametre / 2;
        $volume = (4/3) * pi() * pow($rayon, 3);
        return "Le volume de la sphère est de : " . round($volume,2) . "cm3 <br>";

    }

    public function afficherSphere(){
        echo "Le diametre de la sphère est de $this->diametre cm <br>";
        echo $this->circonferenceSphere();
        echo $this->volumeSphere();
        echo "*******************************************<br>";
    }
}














?>