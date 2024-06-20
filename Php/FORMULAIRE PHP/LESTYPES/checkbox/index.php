<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
    <p>Intérêt</p>
    <label for="music">Musique</label>
    <input type="checkbox" name="interet[]" value="musique" checked>

    <label for="voyages">Voyages</label>
    <input type="checkbox" name="interet[]" value="voyage" checked>

    <label for="lecture">lecture</label>   
    <input type="checkbox" name="interet[]" value="lecture" checked>

    <label for="lecture">Cinéma</label>
    <input type="checkbox" name="interet[]" value="cinéma" checked>

    <input type="submit" value="Envoyer">
    </form>

    <?php 
    if(isset($_POST['interet']) && is_array($_POST['interet'])){
        $interet = $_POST['interet'];

        foreach($interet as $interet){
            echo ($interet) . "<br>";
        }
    }else{
        echo "Aucun intéret selectionné";
    }
    
    ?>
</body>
</html>