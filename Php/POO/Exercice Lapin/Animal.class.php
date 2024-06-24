<?php

abstract class Animal {
    protected $couleur;
    protected $nombrePatte;

    public function __construct($couleur,$nombrePatte){
        $this->couleur = $couleur;
        $this->nombrePatte = $nombrePatte;
    }

    public function getCouleur(){return $this->couleur;}
    public function getNombrePatte(){return $this->nombrePatte;}

    public function setCouleur($couleur){$this->couleur = $couleur;}
    public function setNombrePatte($nombrePatte){$this->nombrePatte = $nombrePatte;}


    public function crier(){
        echo "Le lapin crie sa mère ! <br>";
    }


}













?>