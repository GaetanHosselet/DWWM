<?php
$_SESSION = array();

if(ini_get("session.use_cookies")){
    $params = session_get_cookie_params();
    setcookie(session_name(),'',time() - 42000,
    $params['path'], $params["domain"],
    $params['secure'],$params['httponly']
);
echo "Vous vous êtes deconnectés" . "<br";

;
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
    <a href="index.php">Accueil</a>
    <a href="login.php">Connexion</a>
</body>
</html>