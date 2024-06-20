<?php
session_start();

$mail = "";
$nom = "";
$mailcorrect = "test@test.fr";
$nomcorrect = "onsenfoudegaetan";

if (isset($_POST['mail']) && isset($_POST['nom'])) {
    $mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if ($mail == $mailcorrect && $nom == $nomcorrect) {
        $_SESSION['mail'] = $_POST['mail'];
        $_SESSION['nom'] = $_POST['nom'];
        header('location: index.php');
        exit();
    } else {
        echo "<p> L'adresse e-mail ou le nom saisie est invalide</p>";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="login.php" method="POST">


        <label for="nom">Nom Complet</label><br>
        <input type="text" id="nom" name="nom" minlength="2" maxlength="30" value="<?= htmlspecialchars($nom) ?>" required> <br>

        <label for="mail">Adresse e-mail</label> <br>
        <input type="mail" id="mail" name="mail" required value="<?= htmlspecialchars($mail) ?>"> <br>

        <input type="submit" value="Valider">



    </form>

    <a href="index.php">Accueil</a>
    <a href="logout.php">Déconnexion</a>
</body>

</html>