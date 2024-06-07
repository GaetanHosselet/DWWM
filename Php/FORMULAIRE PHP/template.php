<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Public/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="exemple1.php"> Exemple1</a></li>
                <li><a href="exemple2.php">Exemple2</a></li>
                <li><a href="formulaire.php">Formulaire</a></li>
                <li><a href="cercle.php">Cercle</a></li>
                <li><a href="cercle2.php">Cercle2</a></li>
                <li><a href="calculatrice.php">Calculatrice</a></li>
            </ul>
        </nav>
    </header>
    <div>
    <h1><?= $titre ?></h1>
    <?= $content ?>
    </div>
    <footer>Gaetan Hosselet né le 23 octobre 1992 à Dechy, c'était vraiment un bébé magnifique et il ne fait que s'améliorer avec le temps</footer>
    
</body>
</html>