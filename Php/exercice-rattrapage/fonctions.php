<?php

$employes = [];

function ajouterEmploye(&$employe, $id, $nom, $poste,$salaire){
    $employe[$id] = [
        "nom" => $nom,
        "poste" => $poste,
        "salaire" => $salaire
    ];
}

function afficherEmployes($employes){
    foreach($employes as $id => $employe){
        echo "ID : $id\n";
        echo "Nom : " .$employe['nom'] . "\n";
        echo "Poste : " .$employe['poste'] . "\n";
        echo "Salaire : " .$employe['salaire'] . "\n";
        echo "*********************************************************** \n";
    }
}

function calculerSalaireTotal($employes){
    $salaireTotal = 0;
    foreach($employes as $employe ){
     $salaireTotal += $employe["salaire"];
    }
    return $salaireTotal;
}