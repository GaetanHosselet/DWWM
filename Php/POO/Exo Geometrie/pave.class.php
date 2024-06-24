<?php

require_once "Rectangle.class.php";

class Pave extends Rectangle{
    
    protected $hauteur;
    public function __construct($longueur,$largeur,$hauteur){
        parent::__construct($longueur, $largeur);
        $this->hauteur = $hauteur;
    }
    public function getHauteur(){$this->hauteur;}
    public function setHauteur($hauteur){$this->hauteur = $hauteur;}

    public function perimetrePave(){
        $perimetrePave = ($this->longueur + $this->largeur + $this->hauteur)*4;
        return "Le perimètre du Pave est de $perimetrePave cm <br>";
    }
    public function volumePave(){
        $volumePave = ($this->hauteur * $this->largeur *$this->hauteur);
        return "Le volume du Pave est de $volumePave cm2 <br>";
    }

    public function afficherPave(){
        echo "La longueur du Pave est de $this->longueur, sa largeur est de $this->largeur et sa hauteur est de $this->hauteur <br>";
        echo $this->perimetrePave();
        echo $this->volumePave();
        echo "*******************************************<br>";
    }
}










?>