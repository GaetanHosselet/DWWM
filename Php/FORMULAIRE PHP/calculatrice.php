<?php
require "fonctions2.php";


    ob_start(); 
    ?>
<form action="traitement3.php" method="POST">


    <label for="nombre1">Entrez le premier nombre :</label>
    <br>
    <input type="number" name="nombre1" id="nombre1">
    <br>


    <label for="nombre2">Entrez le deuxième nombre :</label>
    <br>
    <input type="number" name="nombre2" id="nombre2">
    <br>



    <label for="menu">Choisissez une opération</label>
    <br>
    <select name="menu" id="menu">
    <option value="1">Addition</option>
        <option value="2" >Soustraction</option>
        <option value="3" >Multiplication</option>
        <option value="4" >Division</option>
    </select>
        <input type="submit" value="Calculer">








<?php
    $content = ob_get_clean();
    $titre = "Calcul sur le cercle";
    require "template.php";
?>