<?php

require "fonctions.php";

$nbA = readline("Merci d'entrer un premier nombre entier : ");
$nbB = readline("Merci d'entrer un premier nombre entier : ");


echo "Le PPCM(Plus petit multiple commun de $nbA et $nbB est de : " . calculPPCM($nbA, $nbB);