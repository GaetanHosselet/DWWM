<?php ob_start(); ?>

<link rel="stylesheet" href="./Public/styleform.css">

<form action="" method="POST">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom">

    <br>


    <label for="email">Email :</label>
    <input type="email" name="email" id="email">


    <br>

    <input type="submit" value="Envoyer">

    <?php
    if (isset($_POST['nom']) && isset($_POST['email'])) {
        $name = $_POST['nom'];
        $email = $_POST['email'];

        echo "<p>Nom : $name </p>";
        echo "<p>Email : $email </p>";
    }else{
        echo "<p> Aucune donnée soumise.</p>";
    }

    ?>

</form>






<?php
$content = ob_get_clean();
$titre = "FORMULAIRE";
require "template.php";


?>
