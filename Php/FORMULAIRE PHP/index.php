<?php ob_start(); ?>

<h2>Bonjour !</h2>





<?php
    $content = ob_get_clean();
    $titre = "Ma page d'accueil";
    $footer = "Gaetan Hosselet né le 23 octobre 1992 à Dechy, c'était vraiment un bébé magnifique et il ne fait que s'améliorer avec le temps";
    require "template.php";


    ?>

