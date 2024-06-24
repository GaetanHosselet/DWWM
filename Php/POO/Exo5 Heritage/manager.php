<?php

require_once "Employe.php";

class Manager extends Employe{
    protected $employesGeres;

    public function __construct($nom,$salaire, $employesGeres = [],){
        $this->employesGeres = $employesGeres;
    }

    public function ajouterEmploye($employe){

        $this->employesGeres[]= $employe;
    }

    public function afficherDetail(){
        echo "Nom du manager : $this->nom <br>";
        echo "Salaire du manager : $this->salaire<br>";
        echo "Employés gérés par le manager : ";
        foreach ($this->employesGeres as $employe) {
            echo "<br>" . "- Nom : " . $employe->getNom() . ", Salaire : " . $employe->getSalaire() . " Euros <br>";
        }
        echo "**************************************************<br>";
    }
}


















?>