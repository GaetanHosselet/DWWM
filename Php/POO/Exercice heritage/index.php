<?php

require_once "Rose.class.php";
require_once "Pissenlit.class.php";

$rose = new Rose("Rose", "Fleur", 30, "pas ouf", "Rosacée", "rose", "Avec");
$pissenlit = new Pissenlit("Pissenlit", "Fleur", 6, "pas ouf non plus","Pissenlidé", "Horrible");

$rose->afficher();

$rose->setCouleur("bleu");

$rose->afficher();
 
$pissenlit-> afficher();



?>