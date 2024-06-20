<?php
session_start();



if(isset($_SESSION['nom'])&&(isset($_SESSION['mail']))){
    $succes = "Bonjour : " . $_SESSION['nom'] . "  Et bienvenue ! " . "<br>" ;
}else{
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
</head>
<body>

<?= $succes ?>

<a href="login.php">Connexion</a>
<a href="logout.php">Deconnexion</a>


    
</body>
</html>
