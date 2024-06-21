<?php

class Produit {
    private $nom;
    private $prix;
    private $stock;

    public function __construct($nom, $prix, $stock){
        $this -> nom = $nom;
        $this -> prix = $prix;
        $this -> stock = $stock;
    }

    public function getNom(){return $this->nom;}
    public function getPrix(){return $this->prix;}
    public function getStock(){return $this->stock;}

    public function setNom($nom){$this -> nom = $nom;}
    public function setPrix($prix){$this -> prix = $prix;}
    public function setStock($stock){$this -> stock = $stock;}


    public function afficherProduit(){
        Echo "Produit : $this->nom" . "<br>";
        Echo "Prix : $this->prix" . " euros <br>";
        Echo "Quantité en stock : $this->stock" . "<br>";
        Echo "***************************************<br>";
    }

    public function mettreAJourPrix($nouveauPrix){
        $this->prix = $nouveauPrix;
        echo "Le noveau prix de $this->nom" . " est de " . $nouveauPrix  . " euros <br>";
        echo "***************************************<br>";
    }

    public function ajouterStock($quantiteAjoutee){
        $this->stock += $quantiteAjoutee;
        echo "Le nouveau stock est de $this->stock" . "<br>";
        echo "***************************************<br>";
    }

    public function vendreProduit($quantiteVendue){
        if ($this->stock >= $quantiteVendue){
            $this->stock -= $quantiteVendue;
            echo "Vente réussi, le nouveau stock est de $this->stock" . "<br>";
            echo "***************************************<br>";
        }
       else{
        echo "Vente échoué, le stock est insuffisant. Stock actuel : $this->stock" . "<br>";
        echo "***************************************<br>";
    }}


















}















?>