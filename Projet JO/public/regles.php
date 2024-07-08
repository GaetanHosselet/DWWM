<?php ob_start();?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleRegles.css">
    <title>Règles</title>
</head>
<body>
    <section class="secR">
    <div class="blocR">
        <p class="parR">En escrime, deux concurrents se font face, une arme à la main,<br> et doivent toucher leur adversaire de leur arme sur une zone donnée.<br> Chaque arme dispose de ses spécificités.<br> Le sabre permet de toucher son adversaire avec toutes les parties de la lame (pointe, tranchant et dos).<br> La surface valable comprend le haut du corps à partir de la taille, incluant les bras et la tête.<br> L’épée et le fleuret ne permettent de marquer des points qu’avec la pointe, mais sur l’ensemble du corps (incluant le masque et les chaussures) pour l’épée,<br> et uniquement sur le tronc (buste, épaules et cou) pour le fleuret.<br> L’escrimeur qui atteint quinze points, ou qui en a le plus à la fin du temps réglementaire remporte le combat.<br> Par équipe, c’est la première équipe à 45 points, ou qui en a le plus à la fin du temps réglementaire, qui l’emporte.
    </p>
    </div>
    </section>
</body>
</html>












<?php
$content =ob_get_clean();
$titre = "Les Règles";
require "template.php";