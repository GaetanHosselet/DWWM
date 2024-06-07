<?php
require "fonctions2.php";

$nombre1 = $nombre2 = $choix = $resultat = "";
$message = "";

if(isset($_POST['nombre1'])&&isset($_POST['nombre2'])&&isset($_POST['menu'])){
    $nombre1 = floatval($_POST['nombre1']);
    $nombre2 = floatval($_POST['nombre2']);
    $choix = intval($_POST['menu']);
}




    operation($choix, $nombre1, $nombre2);








    ob_start(); 
    ?>
<!-- <form action="traitement3.php" method="POST">


    <label for="nombre1">Entrez le premier nombre :</label>
    <br>
    <input type="number" name="nombre1" id="nombre1">
    <br>
    <input type="submit" value="Calculer">


    <label for="nombre2">Entrez le deuxième nombre :</label>
    <br>
    <input type="number" name="nombre2" id="nombre2">
    <br>
    <input type="submit" value="Calculer">


    <label for="menu déroulant">Choisissez une opération</label>
    <br>
    <select name="menu" id="menu">
    <option value="addition">Addition</option>
        <option value="soustraction">Soustraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
        </select>
        <input type="submit" value="Calculer">

</form> -->

<?php if ($message): ?>
    <p><?= $message; ?></p>
<?php endif; ?>








<?php
    $content = ob_get_clean();
    $titre = "Calcul sur le cercle";
    require "template.php";
?>