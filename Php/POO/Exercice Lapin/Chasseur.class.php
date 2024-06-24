<?php

require_once "Humain.class.php";
require_once "Lapin.class.php";
require_once "iInterface.php";


class Chasseur extends Humain implements iInterface{
    protected $arme;

    public function __construct($nom, $arme){
        parent::__construct($nom);
        $this->arme = $arme;
    }

    public function getArme(){return $this->arme;}
    public function setArme($arme){$this->arme = $arme;}

    public function creerChasseur($nom, $arme){
        echo  "La chasseur " . $nom . " armé d'un " . " $arme" . " a été créé. <br>";
    }
    public function seDeplacer(){
        echo "Le lapin blanc s'enfuie sur ses 4 pattes d'un seul bond ! <br>";
    }

    public function chasser(&$enVie){

        do {
            $tir = rand(1, 6);
            if ($tir == 1 || $tir == 6) {
                $enVie = false;
                echo "Le chasseur " . $this->nom ." tire sur le lapin avec son " . $this->arme . "<br>";
                echo "Le lapin s'est fait zigouiller. <br>";
                break;
            } else {
                echo "Le chasseur " . $this->nom ."tire sur le lapin avec son " . $this->arme . " et le rate comme un gros naze"  ."<br>";
                 $this-> seDeplacer();
            }
        } while ($tir !== 1 || $tir !== 6);
    }

    public function avancerChasseur(){
        Echo "$this->nom avance avec son " . " $this->arme. <br>";
    }
}