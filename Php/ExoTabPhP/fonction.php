<?php

// EXERCICE 1--------------------------------------------------------------

// function TTC ($prixHT, $nombre){
//     $TVA = $prixHT*0.2;
//     $prixTTCunitaire = $prixHT + $TVA;
//     $prixTTC = $prixTTCunitaire * $nombre;
//     return $prixTTC;
// }

// EXERCICE 2 --------------------------------------------------------------

// function PGCD($nombre1, $nombre2) {
//     if (($nombre1 <= 0) || ($nombre2 <= 0))
//     return ("Nombres positifs uniquement");
//     while ($nombre2 > 0)
//     {
//         // dans cette boucle, il y aura plusieurs boucles jusqu'a ce que le $nombre 2 soit égal à 0, alors le $nombre1 sera le PGCD.
//     $reste = $nombre1 % $nombre2;
//     $nombre1 = $nombre2;
//     $nombre2 = $reste;

//     }
//     return $nombre1;
// }

// EXERCICE 3 ---------------------------------------------------------------

// function PPCM($a, $b)
// {
//     $res = $a * $b;
//     while ($a > 1) {
//         $r = $a % $b;
//         if ($r == 0) {
//             $res = $res / $b;
//             break;  // sorti quand résultat trouvé
//         }
//         $a = $b;
//         $b = $r;
//     }
//     return $res; // retourne le résultat
// }








// EXERCICE REPERTOIRE TEL ====================================================



function ajout(&$repertoire, $nom, $numero){
    $contact = "$nom, $numero";
    $repertoire[]=  $contact;
};


function rechercher (&$repertoire, $saisie){
    foreach($repertoire as $saisie) {
        if ($saisie['nom']=== $nom){
            return $repertoire;
        }
    }
    return null;
}
    
// }