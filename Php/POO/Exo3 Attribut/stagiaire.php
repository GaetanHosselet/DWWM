<?php
class Stagiaire{
    private $nom;
    public $notes;

function __construct($nom, $notes){
    $this->nom =$nom;
    $this->notes =$notes;
}

    public function getNom(){return $this->nom;}
    public function getNotes(){return $this->notes;}

    public function setNom($nom){$this-> nom =$nom;}
    public function setNotes($notes){$this -> notes =$notes;}



    public function calculerMoyenne(){
        $moyenne = array_sum($this->notes)/count($this->notes);

        echo "La moyenne de ". $this->nom ." est de " . $moyenne . "<br>";
    }

    public function trouverMaxEtMin(){
        $noteMax = max($this->notes);
        $noteMin = min($this->notes);

        echo "La plus haute note de " . $this->nom ." est de " . $noteMax . "<br>";
        echo "La plus basse note de " . $this->nom . " est de " . $noteMin . "<br>";
    }

    public function afficher(){
        $convertir = implode(" , ", $this->notes);
        echo "Prénom de l'élève : $this->nom <br>";
        echo  "Notes de l'élvève : " .$convertir ."<br>";
    }












}













?>