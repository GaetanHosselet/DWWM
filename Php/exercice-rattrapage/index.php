<?php

require "fonctions.php";

ajouterEmploye($employes,1 ,"Pierre", "Développeur", 50000);
ajouterEmploye($employes,2 ,"Piee", "Déveloeur", 50000);
ajouterEmploye($employes,3 ,"Pier", "Deloppeur", 50000);

echo "Liste des employes : \n";
afficherEmployes($employes);

echo calculerSalaireTotal($employes);


