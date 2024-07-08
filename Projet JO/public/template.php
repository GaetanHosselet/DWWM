<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/styleIndex.css">
    <link rel="stylesheet" href="/public/css/styleRegles.css">
    <link rel="stylesheet" href="/public/css/styleEquipes.css">
    <title>Escrime Olympique</title>
</head>
<body>

    <header>

    <nav>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="equipes.php">Equipes</a></li>
        <li><a href="regles.php">Règles</a></li>
        <li><a href="calendrier.php">Calendrier</a></li>
        <li><a href="resultats.php">Resultats</a></li>
        <?php if(isset($_SESSION['user_id'])): ?>
            <li><a href="logout.php">Déconnexion</a></li>
        <?php else: ?>
            <li><a href="login.php">Connexion</a></li>
        <?php endif; ?>




    </nav>




    </header>
   <div class="h1">
    <h1><?= $titre ?></h1>
    </div>
    <?= $content ?>
    
</body>
</html>






























<?php


?>