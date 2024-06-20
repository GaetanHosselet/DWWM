<?php

require "fonctions.php";

$nb1 = readline("Merci d'entrez un premier nombre entier : ");
$nb2 = readline("Merci d'entrer un deuxième nombre entier : ");

echo "Le PGCD(Plus Grand Diviseur Commun de $nb1 et $nb2 est de : " . calculPGCD($nb1, $nb2);