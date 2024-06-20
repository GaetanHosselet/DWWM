<?php

// Je démarre une session
session_start();

// Stocker des informations dans la session
$_SESSION['username'] = 'toto';
$_SESSION['mail'] = 'toto@gmail.com';

// Accéder aux informations de la session
echo "username : " . $_SESSION['username'] . "<br>";
echo "mail : " . $_SESSION['mail'] . "<br>";

// Je vérifie si la session est active;

if(isset($_SESSION['username'])){
    echo "L'utilisateur  est connecté : " . $_SESSION['username'];
}else{
    echo "L'utilisateur n'est pas connecté";
}

// Je supprime une variable de session

unset($_SESSION['username']);

// Détruire la session
$_SESSION = array();

// Détruire le cookie de session

if(ini_get("session.use_cookies")){
    $params = session_get_cookie_params();
    setcookie(session_name(),'',time() - 42000,
    $params['path'], $paramas["domain"],
    $params['secure'],$params['httponly']
);
}

session_destroy();
?>