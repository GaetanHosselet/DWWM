<?php

require_once "Plante.class.php";
class Pissenlit extends Plante{

    protected $gout;

    public function __construct($nom, $type, $hauteur, $dureeDeVie, $famille,$gout){
        parent::__construct($nom, $type, $hauteur, $dureeDeVie, $famille);
        $this -> gout = $gout;
    }

    public function getGout(){return $this->gout;}
    public function setGout($gout){$this -> gout = $gout;}

    public function afficher(){
        $this->affichageCommun();
        echo "Gout : $this->gout <br>";
    }
}







?>