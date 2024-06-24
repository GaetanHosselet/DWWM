<?php

require_once "Animal.class.php";
require_once "Humain.class.php";
require_once "Lapin.class.php";
require_once "Chasseur.class.php";

$lapin = new Lapin("Blanc","4", true);
$chasseur = new Chasseur("Paul","Fusil");

$lapin -> creerLapin( "blanc", 4);
$chasseur -> creerChasseur("Paul", "Fusil");
$lapin -> seNourrir();
$chasseur-> avancerChasseur();
$lapin-> crier();
$chasseur->chasser($enVie);













?>