<?php

class Cercle{
    protected $diametre;

    public function __construct($diametre){
        $this->diametre = $diametre;
    }

    public function getDiametre(){$this->diametre;}
    public function setDiametre($diametre){$this->diametre =$diametre;}

    public function perimetreCercle(){
        $perimetre = M_PI * $this->diametre;
        return "Le périmètre du cercle est de :  $perimetre cm <br>";
    }

    public function aireCercle(){
        $rayon = $this->diametre / 2;
        $aire = M_PI * pow($rayon, 2);
        return "L'aire du cercle est de :  $aire cm² <br> ";
    }

    public function afficherCercle(){
        echo "Le diametre du cercle est de $this->diametre cm <br>";
        echo $this->perimetreCercle();
        echo $this->aireCercle();
        echo "*******************************************<br>";
        
    }
}










?>