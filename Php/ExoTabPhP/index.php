<?php

// EXERCICE 1 ==================================================================================

// $notes=[];
// for($i= 0;$i<9;$i++){
//     $notes[$i] = readline("Entrez une valeur " . ($i + 1) . " : ");
//     while (!is_numeric($notes[$i]) || $notes[$i] < 1 || $notes[$i] > 9) {
//         echo "Entrez un nombre valide !\n";
//         $notes[$i] = readline("Entrez une nouvelle valeur (entre 0 et 10). " . ($i + 1) . " : ");
//     }
// }

// // Calculer la moyenne
// $sum = array_sum($notes);
// $moy = $sum/count($notes);
// echo "Voici la moyenne des valeurs : " . $moy;


//  EXERCICE 2 ==================================================================================

// $tab = [];

// $saisie1 = readline('écrit le nombre de valeur que tu va entrer: ');

// for ($i=0; $i < $saisie1; $i++) { 
//     $saisie2 = readline('ecrit une valeur a ajouter au tableau: ');
//     $tab[] = $saisie2;
// }

// $positives = 0;
// $negatives = 0;

// foreach ($tab as $value) {

//     if ($value < 0){
//         $negatives++;
//     }elseif ($value > 0)
//     $positives++;
// }

// echo "nombre de valeur negative = " , $negatives , "\n";
// echo "nombre de valeur positive = " , $positives , "\n";

//  EXERCICE 3 ======================================================================================

// $tab = [1, 8, 3, 4, 5];
// $total = 0;

// for ($i = 0; $i < count($tab); $i++) { 
//      $total += $tab[$i];
// }

// echo "Total : " . $total;

// EXERCICE 4 ========================================================================================
// function afficherTab($tab, $nomTab){
//     echo "$nomTab : ";
//     foreach($tab as $index => $valeur){ 
//         echo "$valeur ";
//     }
//     echo "\n";
// }

// $tab_1 = [4, 8, 7, 9, 1, 5, 4, 6];
// $tab_2 = [7, 6, 5, 2, 1, 3, 7, 4];

// afficherTab($tab_1, "Tableau 1");
// afficherTab($tab_2, "Tableau 2");


// for($i=0; $i<count($tab_1); $i++){
//     $tab_3[$i] = $tab_1[$i] + $tab_2[$i];
// }

// afficherTab($tab_3, "Tableau 3");

// EXERCICE 5 ===========================================================================================

// $nombreDeValeurs = readline("Saisie combien tu veux de valeur ? ");

// $tab = [];

// for ($i = 0; $i < $nombreDeValeurs; $i++) {
//     $valeur = readline("Saisie une valeur") . ($i + 1) . ": ";
//     $tab[] = $valeur;
// }

// $upValeur = $tab[0];
// $position = 0;

// for ($i = 1; $i < count($tab); $i++) {
//     if ($tab[$i] > $upValeur) {
//         $upValeur = $tab[$i];
//         $position = $i;
//     }
// }

// echo "La plus grande valeur est " . $upValeur . " à la position " . ($position + 1) . ".\n";

// EXERCICE 6 ============================================================================================

// Toujours et encore sur le même principe, écrivez un algorithme permettant, à l’utilisateur de saisir les notes d'une classe. Le programme, une fois la saisie terminée, renvoie le nombre de ces notes supérieures à la moyenne de la classe.


// $arrayLength = readline("Veuillez entrer la taille du tableau : ");
// $arr = [];

// for ($i = 0; $i < $arrayLength; $i++) {
//     $arr[$i] = readline("Veuillez entrer une note : ");
// }

// $average = array_sum($arr) / $arrayLength;

// echo "moyenne : " . $average . "\n";

// foreach ($arr as $value) {
//     if ($value > $average) {
//         echo $value . "\n";
//     }
// }

//  EXERCICE 7 ============================================================================================

// $prix = [5, 50, 23, 11];
// $quantite = [10, 1, 4, 3];  
// $tab3 = [];

// for ($i = 0; $i < count($prix); $i++) {
//     $tab3[] = $prix[$i] * $quantite[$i]; 
// }

// foreach ($tab3 as $value) {
//     $value;
// }

// $total = array_sum($tab3);
// echo "La somme totale est : " . $total;












//  EXERCICES 9.1 ======================================================================================================


// $chomage = array('Autriche' =>4.9, 
//                 'Allemagne' =>9.3, 
//                 'Danemark' =>4.8, 
//                 'Espagne' =>9.4, 
//                 'France' =>9.7);

// foreach ($chomage as $key => $value){
//     echo "Taux de chomage de $key : $value \n";
// }

// foreach ($chomage as $key => $value){
//     if ($value < 5) {
//         echo "taux de chomage de $key : $value \n";

//     }
// }


// foreach ($chomage as $key => $value){
//     asort($chomage);
// }
// echo "Pays qui a le plus faible taux de chomage :", array_key_first($chomage);


// EXERCICE 9.2 ===============================================================================

// $tabNotes = array('boucher'=>16,
//                   'bourdette'=>13,
//                    'Remy'=>1,
//                    'Emy'=>5,
//                    'Gaetan'=>20,
//                    'Ethan'=>8,
//                    'Axel'=>15,
//                    'Celine'=>0,
//                    'Marvin'=>22);

// foreach ($tabNotes as $key => $value){
//     echo "Nom de l'élève : $key, Note : $value \n";
// }



// echo array_sum($tabNotes) / count($tabNotes);


// EXERCICE 9.3 =============================================================================================


// $tabNotes = array ('Emy'=> array(18,18,16),
//                    'Gaetan' => array(20,20,20),
//                    'Marvin' => array(21,22,23),
//                    'Celine' => array(0,0,0),
//                    'Thomas' => array(15,12,18)
// );

// foreach($tabNotes as $key => $value){
//     echo "nom de l'éléve : $key \n", "note de l'éléve :" .join(",", $value). "\n";
// }

// foreach ($tabNotes as $key => $value){
//     echo "nom de l'éléve : $key \n", "moyenne de l'éléve :" .array_sum($value)/count($value), "\n";
// }


// EXERCICE 8.1 ============================================================================================


// $T = [[1,2,3,4,5,6,7,8],[1,5,3,2,9,5,8,4],[1,5,3,2,9,5,8,4],[1,5,3,2,9,5,8,8],[1,5,3,2,9,5,8,4],[1,5,3,2,9,5,8,5],[1,5,3,2,9,5,8,7],[1,5,3,2,9,5,8,6],[1,5,3,2,9,5,8,54],[1,5,3,2,9,5,8,13],[1,5,3,2,9,5,8,22],[1,5,3,2,9,5,8,23]];

// $max = [0][0];

// for ($i = 1; $i < count($T); $i++){
//     for ($j = 1; $j < count($T[$i]); $j++)
//     if ($T[$i][$j]> $max){
//         $max = $T[$i][$j];
//     }
// }

// echo "La valeur max du tableau est : $max";

// EXERCICE 8.2 ==============================================================================================

// $tab = array();

// for ($i = 1; $i <= 7; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         $tab[$i][$j] = "*"." ";
//         echo $tab[$i][$j];
//     }
//     echo "\n";
// }

// for ($i = 6; $i >= 1; $i--) {
//     for ($j = 1; $j <= $i; $j++) {
//         $tab[$i][$j] = "*"." ";
//         echo $tab[$i][$j];
//     }
//     echo "\n";
// }

// EXERCICE ==========================FONCTIONS ================================================================================================

// EXERCICE 1
require "fonction.php";

// $prixHT = readline("Entre le prix de l'article");
// $nombre = readline ("Entrez le nombre d'article");

// echo TTC($prixHT, $nombre);

// EXERCICE 2 =======================================================================

// $nombre1 = readline('Entrez un nombre entier positif');
// $nombre2 = readline('Entrez un deuxième nombre entier positif');

// echo "le PGCD (Plus grand diviseur commun) de $nombre1 et de $nombre2 est de :" .PGCD($nombre1, $nombre2);

// EXERCICE 3 =======================================================================

// $a = readline("Entrez un nombre entier");
// $b = readline("Entrez un deuxiéme nombre entier");

// echo "Le PPCM(plus petit commun multiple) de $a et de $b est  :  " .PPCM($a, $b);











// EXERCICE REPERTOIRE TEL============================================================================
// $continuer = "y";
// $repertoire = [];


// while ($continuer == "y") {

//     $menu = readline("Bonjour et bienvenu sur votre répertoire téléphonique \n Pour ajouter un contact, tapez : 0 \n Pour rechercher un contact, tapez : 1 \n Pour afficher vos contacts, tapez : 2");

//     switch ($menu) {
//         case 0:
//             $nom = readline("Entrez le nom du contact \n");
//             $numero = readline("Entrez le numero du contact \n");

//             ajout($repertoire, $nom, $numero);
//             break;
//         case 1:
//             $saisie = readline("Tapez le nom du contact que vous recherchez :");
//             rechercher($repertoire, $saisie);
//             break;

//         case 2:
//             print_r($repertoire);
//             break;
//     }

//     $continuer = readline("Voulez vous continuer ?");
// }

// Tableau vide pour pouvoir y mettre des contacts plus tard
$repertoire = [];

// Fonction pour ajouter des contacts
function PushTabl($nom, $numero) {
    global $repertoire;
    array_push($repertoire, [$nom, $numero]);
    echo "**********************************************\n";
    echo "Contact ajouté : $nom, $numero\n \n";
    echo "**********************************************\n";
}

// Fonction pour rechercher un contact
function recherche($nom) {
    global $repertoire;
    foreach ($repertoire as $contact) {
        if ($contact[0] === $nom) {
            return $contact[1];
        }
    }
    return "Contact non trouvé \n";
}

// Fonction pour voir tout les contacts
function toutVoir() {
    global $repertoire;
    if (count($repertoire) === 0) {
        echo "**********************************\n";
        echo "Le répertoire est vide.\n";
        echo "**********************************\n";
    } else {
        foreach ($repertoire as $contact) {
            
            echo "\n".$contact[0] . " " . $contact[1]."\n";
            
        }
    }
}













// Boucle do While pour rentrer au moin 1 fois dans la boucle
do {
$choix1 = 1;
$choix2 = 2;
$choix3 = 3;

echo "Vous souhaitez :\n\n $choix1 : Ajouter un nouveau contact\n $choix2 : Recherchez un contact\n $choix3 : Rechercher Tout contact\n\n";

$choix = readline("Que voulez-vous faire ? ");

// Switch pour traiter le choix que l'utilisateur veux faire
    switch ($choix) {
        case $choix1:
            // Rappel de fonction pour ajouter des contacts
        $nom = readline("Entrez le prénom de la personne : ");
        $numero = readline("Entrez le numéro de téléphone : ");
        PushTabl($nom, $numero);
            break;
    
        case $choix2:
            // Rappel de fonction pour rechercher un contact
        $nomRecherche = readline("Entrez le prénom de la personne à rechercher : ");
        $resultatRecherche = recherche($nomRecherche);
        echo "**********************************************************************\n";
        echo $nomRecherche." a ce numéro : ". $resultatRecherche. "\n";
        echo "**********************************************************************\n";
            break;
    
        case $choix3:
            // Rappel de fonction pour voir tout les contacts
        toutVoir();
            break;
    
        default:
        // Si il fait un choix hors de ceux proposé
            echo "Merci de saisir un choix valide !";
            break;
    }
    // Demande pour continuer ou sortir de la boucle
    $choix = readline("Voulez-vous faire autre chose dans votre menu ? ");
    // Strtolower pour que même si il met en majuscule ca met en minuscule et valide la condition
    $choix = strtolower($choix);
} while ($choix == "oui" || $choix == "yes" || $choix == "y");

// Fin de programme et de la boucle
echo "Merci au revoir";
