<?php ob_start(); ?>

<h2>Bonjour !</h2>


<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eius quidem debitis qui eligendi quos dolorum adipisci, provident dicta magnam molestiae ipsum impedit nesciunt fuga sunt, doloremque libero soluta repudiandae!</p>


<?php
    $content = ob_get_clean();
    $titre = "Titre exemple1";
    require "template.php";


    ?>