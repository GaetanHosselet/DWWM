<?php

class Rectangle{
    protected $longueur;
    protected $largeur;

    public function __construct($longueur, $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;

    }
    public function getLongueur(){return $this->longueur;}
    public function getLargeur(){return $this->largeur;}

    public function setLongueur($longueur){$this->longueur = $longueur;}
    public function setLargeur($largeur){$this->largeur = $largeur;}

    public function perimetre(){
        $perimetre = (($this->longueur * 2) + ($this->largeur*2));
        echo "le périmètre du rectangle est de :  $perimetre cm <br>";
    }

    public function aire(){
        $aire = ($this->longueur * $this->largeur);
        echo "L'aire du rectangle est de : " . round($aire, 2) . " cm  <br>";
    }

    public function estCarre(){
        if($this->longueur == $this->largeur){
            echo "Le rectangle est un carré <br>";
            echo "*******************************************<br>";
        }else{
            echo "Le rectangle n'est pas un carré <br>";
            echo "*******************************************<br>";
        }
    }

    public function afficherRectangle(){
        echo "La longueur du rectangle est de $this->longueur cm et la largeur est de $this->largeur cm <br>";
        $this->perimetre();
        $this->aire();
        $this->estCarre();
    }


}















?>