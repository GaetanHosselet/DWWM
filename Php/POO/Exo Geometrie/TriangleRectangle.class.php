<?php

class TriangleRectangle
{
    protected $base;
    protected $hauteur;

    public function __construct($base, $hauteur)
    {
        $this->base = $base;
        $this->hauteur = $hauteur;
    }

    public function getBase()
    {
        $this->base;
    }
    public function getHauteur()
    {
        $this->hauteur;
    }

    public function setBase($base)
    {
        $this->base = $base;
    }
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    }

    public function perimetreTriangle()
    {
        // Calcul de l'hypoténuse - sqrt sert a calculer la racine carrée d'un nombre
        $hypotenuse = sqrt(pow($this->base, 2) + pow($this->hauteur, 2));

        // Calcul du périmètre
        $perimetreTriangle = $this->base + $this->hauteur + $hypotenuse;

        return "Le périmètre du triangle rectangle est de : $perimetreTriangle cm <br>";
    }

    public function airTriangle(){
                // Calcul de l'aire
                $aire = 0.5 * $this->base * $this->hauteur;
                return "L'aire du triangle rectangle est de : $aire cm² <br>";
    }

    public function afficherTriangle(){
        echo "La base du triangle est de $this->base cm et sa hauteur est de $this->hauteur cm <br>";
        echo $this->perimetreTriangle();
        echo $this->airTriangle();
        echo "*******************************************<br>";
    }
}
