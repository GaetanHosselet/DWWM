<?php

// $joueur = "Trotro";
// echo"Nom du joueur:".$joueur ."\n";

// $joueur1 = 3*9;
// echo"Resultat:".$joueur1 ."\n";

// $age = 20;
// echo "Age du joueur:" .$age ."\n";

// // $age = $age +1;
// $age--;
// echo "Age du joueur:" .$age ."\n";


// string
// $a = "Hello world";
//int
// $b = 1;
//float=double
// $c = 3.14;
//Boolean
// $d = true;

// echo $a ."\n", $b ."\n", $c ."\n", $d ."\n";

// echo gettype($a);

// define('MACONST','HELLO');
// echo MACONST;


// const PI = 3.14;
// echo PI;

// if(true) {
//     define('MACONST','HELLO');
// }else{
//     define('MACONST','HELLO WORLD');
// }




// $saisie = readline("saisir un nombre : ");
// echo $saisie;

// $age = readline("Saisir un age \n ");
// if($age > 10){
//     echo " Age est supérieur à 10";
// }
// elseif($age == 10){
//     echo "Age est égal à 10";}
//     else{
//     echo "Age est inférieur à 10";
// }

// $saisie = readline ("saisir un nombre");
// $saisie = $saisie * 10;
// echo $saisie;

// $age = readline("Saisir un age \n ");
// if($age > 10):
//     echo " Age est supérieur à 10";
// elseif($age == 10):
//     echo "Age est égal à 10";
// else:
//     echo "Age est inférieur à 10";
// endif;






// $prenom ="Luc";

// switch($prenom){
//     case "Jean":
//         echo "Bonjour Jean";
//         break;
//     case "Paul":
//         echo "Bonjour Paul";
//         break;
//     case "Pierre":
//         echo "Bonjour Pierre";
//         break;
//     default:
//         echo "Pas de Nom";
//         break;
// }

// $prenom ="Luc";

// switch($prenom):
//     case "Jean":
//         echo "Bonjour Jean";
//         break;
//     case "Paul":
//         echo "Bonjour Paul";
//         break;
//     case "Pierre":
//         echo "Bonjour Pierre";
//         break;
//     default:
//         echo "Pas de Nom";
//     endswitch;


// $prenom ="jean";

// echo match($prenom){
//     "jean" => "Bonjour Jean",
//     "paul" => "Bonjour Paul",
//     default => "Tékimek ?",
// };

// $age = 10;

// $isAllowed;
// if($age > 10 ){
//     $isAllowed = True;
// }else{
//     $isAllowed =False;
// }

// $isAllowed = $age > 10 ? true : false;



//  FUSION NULL //////////////////////////////////////////////////////////////

// $a = null;
// $b = "hello";
// $c;

// if ($a):
//     $c = $a;
// elseif($b):
//     $c = $b;
// else: 
//     $c = "inconnue";
// endif;

// echo $c;



// $c = $a ?? $b ?? "inconnu";

// echo $c;


// =====================================================EXERCICE================================================================================

// ------------------------------------EXERCICE 2.1------------------------------

// $saisie = readline("Ecris un nombre");
// $resultat = $saisie **2;
// echo $resultat;

// --------------------------------------EXERCICE 2.2--------------------------------
// $prenom = readline("Ecris ton Prenom");
// echo "Bonjour", " ", $prenom;


// --------------------------------------EXERCICE 2.3--------------------------------
// $prixHT = 20;
// $nombresarticle = 3;
// $tva = $prixHT * 0.2;
// $PrixTTC = $prixHT + $tva;
// $total = $PrixTTC * $nombresarticle;

// Echo "PRIX HT :", " ", $prixHT, ".\n", "NOMBRES D'ARTICLES :", " ", $nombresarticle, ".\n", "TVA :", " ", $tva, ".\n", "PRIX TTC :", " ", $PrixTTC, "\n", "TOTAL :", " ", $total;


// --------------------------------------EXERCICE 3.1------------------------------------------

// $nombre = readline ("Ecris un nombre");

// if ($nombre >0):
//     echo "Le nombre est Positif", "\n";
// else:
//     echo "Le nombre est Negatif", "\n";
// endif;

// echo $nombre;

// ------------------------------------EXERCICE 3.2------------------------------------------

// $nombre = readline ("Ecris un nombre");
// $nombre2 = readline("Ecris un deuxième nombre");

// if($nombre >0 && $nombre2 >0 or $nombre <0 and $nombre2 <0):
//     echo "Le produit est positif";
// else:
//     echo "le produit est negatif";
// endif;

// ------------------------------------EXERCICE 3.3---------------------------------------------

// $nombre = readline ("Ecris un nombre");
// $nombre2 = readline ("Ecris un deuxiéme nombre");

// if($nombre >0 && $nombre2 >0 or $nombre <0 and $nombre2 <0):
//     echo "Le nombre est Positif";
// elseif($nombre==0):
//     echo "Le nombre est Invalide";
// else: 
//     echo "Le nombre est Negatif";
// endif;

// ------------------------------------EXERCICE 3.4-----------------------------------------------

// $nombre = readline ("Ecris un nombre",) * readline("Ecris un deuxième nombre",);

// if($nombre >0):
//     echo "Le nombre est Positif", "\n";
// elseif($nombre<0):
//     echo "Le nombre est Negatif", "\n";
// else:
//     echo "Le produit est nul";
// endif;

// ------------------------------------EXERCICE 3.5------------------------------------------------

// $age = readline("Merci d'indiquer votre Age :");

// switch($age):
//     case($age >5 and $age <8):
//         echo "Vous êtes un Poussin PIOUPIOU";
//         break;
//     case($age >7 and $age <10):
//         break;
//         echo "Vous êtes un Pupille PILLEPILLE";
//     case($age >9 and $age <12):
//         echo "Vous êtes un Minime";
//         break;
//     case($age>=12):
//         echo "Vous êtes un Cadet";
//         break;
//     default:
//     echo "Age invalide";
//     endswitch;

// -------------------------------------EXERCICE 3.6------------------------------------------------

// $heure = readline("Tapez 'l'heure actuelle");
// $minute = readline("Tapez les minutes");

// $minute++;

// echo "Dans une minute il sera :", " ",$heure, " ", "heures et ", " ", $minute, " ", "minutes";

// ------------------------------------EXERCICE 3.7-------------------------------------------------
// $heure = readline("Tapes l'heure actuelle");
// $minute = readline("Tapes les minutes");
// $seconde = readline("Tapes les secondes")+1;

// if($seconde >=60):
//     $minute += 1;
//     $seconde -=60;
// endif;
// if($minute >= 60):
//     $heure += 1;
//     $minute -= 60;
// endif;
// if($heure >=24):
//     $heure -=24;
// endif;

// echo "Dans une minute il sera :", " ",$heure, " ", "heures", " ", $minute, " ", "minutes et ", " ", $seconde, " ", "secondes";

// -----------------------------------EXERCICE 3.8---------------------------------------------------

// $nombre = readline("Combien voulez vous de photocopies ?");
// $facture;

// if($nombre <=10):
//     $facture = $nombre * 0.10;
// elseif ($nombre >10 and $nombre <=30):
//     $facture = 10 * 0.10 + ($nombre -10) *0.09;
// elseif($nombre >30):
//     $facture = (10 *0.10) + (20 *0.09) + (($nombre - 30) * 0.08);
// endif;

// echo "Vous devez régler :", "", $facture, " ", "EUROS";

// ----------------------------------EXERCICE 3.9---------------------------------------------------

// $sexe = readline("Entrez votre sexe (Pas littéralement svp bande de cinglés)");
// $age = readline("Entrez votre age");

// if ($sexe = "masculin" && $age > 20):
//     echo "Vous devez payer les impots HAHAHAHAHAHAHAHA";
// elseif($sexe = "feminin" && ($age >= 18 && $age <=30 )):
//     echo "Vous devez payer les impots HAHAHAHAHAHAHAHAHA";
// else:
//     echo "Vous ne devez rien payer bande de veinards !!";
// endif;

// ----------------------------------EXERCICE 3.10--------------------------------------------------

// $jour = readline("Entrez le jour");
// $mois = readline("Entrez le mois");
// $annee = readline("Entrez l'année");

// if(($annee % 4 === 0 && $annee % 100 !== 0) or $annee % 400 ===0 ):
//     echo "l'année est bissextile";
// else:
//     echo "l'année n'est pas bissextile";
// endif;