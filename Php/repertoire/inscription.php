     <?php
     ob_start();
        require_once "dbConnect.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $email = htmlspecialchars(trim($_POST['email']));
                $password = htmlspecialchars(trim($_POST['password']));
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                try {
                    $pdo = getPDOConnexion();
                    $stmt = $pdo->prepare('INSERT INTO Users (email, password) VALUES (:email, :password)');
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':password', $hashedPassword);
                    $stmt->execute();
                    echo "Inscription réussie";
                } catch (PDOException $e) {
                    echo "Erreur lors de l'inscription : " . $e->getMessage();
                }
            } else {
                echo "Veuillez remplir tous les champs.";
            }
        }
        ?>
     <!DOCTYPE html>
         <html>
         <head>
             <title>Inscription</title>
             <link rel="stylesheet" href="style.css">
         </head>

         <body>
             <div class="container">
                 <h2>Formulaire d'inscription</h2>
                 <form action="register.php" method="post">
                     <label for="email">Email :</label>
                     <input type="email" id="email" name="email" required>

                     <label for="password">Mot de passe :</label>
                     <input type="password" id="password" name="password" required>

                     <input type="submit" value="S'inscrire">
                 </form>
             </div>
         </body>

         </html>
         <?php
$content = ob_get_clean();
$titre = "Inscription";
require "template.php";
?>