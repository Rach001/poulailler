<?php

// Inclure la connexion à la base de données
include '../includes/database.php';
session_start();

// Vérification de l'existence des variables POST
if (!isset($_POST['email']) || !isset($_POST['password'])) {
    header("Location: /");
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];

// Récupération de l'utilisateur par e-mail
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

// Vérification du mot de passe
if ($user && password_verify($password, $user['password'])) {
    $_SESSION['loggedin'] = true;
    $_SESSION['userid'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    
    // Redirigez l'utilisateur vers le panel admin
    header("Location: /");
    exit;
} else {
    $_SESSION['message'] = "Identifiants incorrects!";
    header("Location: /load-login");
    exit;
}

?>
