<?php

require_once "Animal.class.php";

class Lapin extends Animal {
    protected $enVie = true;

    public function __construct($couleur, $nombrePatte, $enVie){
        parent::__construct($couleur, $nombrePatte);
        $this->enVie = $enVie;
    }

    public function getEnVie(){return $this->enVie;}
    public function setEnVie($enVie){$this->enVie = $enVie;}

    public function creerLapin($couleur, $nombrePatte){
        echo "Le lapin " . $couleur . " à " . $nombrePatte . " pattes a été créé. <br>";
    }

    public function seNourrir(){
        echo "Le lapin mange paisiblement son herbe de merde <br>";
    }

    


    public function fuir(){}

}