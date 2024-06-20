<?php
require "fonctions.php";

$prixHT = readline("Entrez le prix de l'article : ");
$nbArt = readline("Entrez le nombre d'article : ");

echo "Vous avez acheté $nbArt articles pour $prixHT € unité.";
echo "Le prix TTC de vos achats est de :" . calculTTC($prixHT, $nbArt) . "€";
