<?php
require_once "TriangleRectangle.class.php";

class Pyramide extends TriangleRectangle{
    protected $longueur;
    protected $largeur;
    public function __construct($base, $hauteur, $longueur, $largeur){
        $this->longueur = $longueur;
        $this-> largeur = $largeur;
        parent::__construct($base, $hauteur);
    }

    public function getLongueur(){$this->longueur;}
    public function getLargeur(){$this->largeur;}
    public function setLongueur($longueur){ $this->longueur = $longueur;}
    public function setLargeur($largeur){$this->largeur = $largeur;}

    public function perimetreBase(){
        $perimetreBase = 2 * ($this->longueur + $this->largeur);
        return $perimetreBase;
        
    }

    public function perimetrePyramide(){
         
         $perimetreBase = $this->perimetreBase();
        
        
         $demiDiagonale = sqrt(pow($this->longueur / 2, 2) + pow($this->largeur / 2, 2));
         $areteInclinee = sqrt(pow($demiDiagonale, 2) + pow($this->hauteur, 2));
         
        
         $perimetreTotal = $perimetreBase + 4 * $areteInclinee;
         
         return "Le périmètre total de la pyramide est de : " . round($perimetreTotal, 2) . "cm <br>";
    }

    public function volumePyramide(){
                    
        $base = $this->longueur * $this->largeur;
        
        $volume = (1/3) * $base * $this->hauteur;
        return "Le volume de la pyramide est de : " . $volume . "cm3 <br>";
    }

    public function afficherPyramide(){
        echo "La longueur de la pyramide est de $this->longueur cm, sa largeur est de $this->largeur cm et sa hauteur est de $this->hauteur cm <br>";
        echo $this->perimetrePyramide();
        echo $this->volumePyramide();
        echo "*******************************************<br>";
    }

    
}











?>