<?php
require_once "produit.php";

$ordi = new Produit("Asus Rogue", "2799", "47");

$ordi -> afficherProduit();

$ordi -> mettreAJourPrix(599);

$ordi -> afficherProduit();

$ordi -> ajouterStock(12);

$ordi -> afficherProduit();

$ordi -> vendreProduit(40);

$ordi -> afficherProduit();







?>
