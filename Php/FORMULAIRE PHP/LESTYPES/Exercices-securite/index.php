<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="POST">

<?php
    $email="";
    $nom="";
    $date="";
    $mdp="";
    $mdpconfirm="";
    if(isset($_POST['email'])){
        $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);

        if($email){
            echo "<p> L'adresse e-mail saisie est : $email</p>";
        }else{
            echo "<p> L'adresse e-mail saisie est invalide</p>";
        }
    }
    
    if(isset($_POST['nom'])){
        $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if(isset($_POST['mdp'])){
        $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
    }

    if(isset($_POST['mdpconfirm'])){
        $mdpconfirm = filter_input(INPUT_POST, 'mdpconfirm', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    }

    if(isset($_POST['date'])){
        $date = filter_input(INPUT_POST, 'date', FILTER_VALIDATE_INT);
    }

    if(isset($_POST['option1']) || isset($_POST['option2'])){
        true;
    }

    if($mdp !== $mdpconfirm){
        echo "<p>Les deux mots de passe sont différents, merci de réessayer. </p>";
    }


    



    ?>

    <label for="nom">Nom Complet</label><br>
    <input type="text" id="nom" name="nom" minlength="2" maxlength="30" value="<?= htmlspecialchars($nom) ?>"required> <br>
    
    <label for="email">Adresse e-mail</label> <br>
    <input type="email" id="email" name="email"  required value="<?= htmlspecialchars($email) ?>"> <br>

    <label for="mdp">Mot de passe</label> <br>
    <input type="password" id="mdp" minlength="8" name="mdp" value="<?= htmlspecialchars($mdp) ?>" required> <br>

    <label for="mdpconfirm">Confirmation du mot de passe</label> <br>
    <input type="password" id="mdpconfirm" name="mdpconfirm" value="<?= htmlspecialchars($mdpconfirm) ?>" required> <br>

    <label for="date">Date de naissance</label> <br>
    <input type="date" id="date" name="date" value="<?= htmlspecialchars($date) ?>" required> <br>
    <p>Sexe : </p>
    <label for="option1">Homme</label>
    <input type="radio" id="option1" name="option1" value="homme" > <br>
    <label for="option2">Femme</label>
    <input type="radio" id="option2" name="option2" value="femme"> <br>

    <input type="submit" value="Valider">

    

</form>
    
</body>
</html>