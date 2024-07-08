<?php

require_once "Plante.class.php";


$rose = new Plante("Rose", "Fleur", 30, "pas ouf", "Rosacée", "rose", "Avec");
$pissenlit = new Plante("Pissenlit", "Fleur", 6, "pas ouf non plus","Pissenlidé", "Horrible");

echo $rose;

$rose->hauteur= "55mètres";

echo $rose;


 
echo $pissenlit;
