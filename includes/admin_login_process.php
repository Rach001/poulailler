<?php
// Inclure la connexion à la base de données
include 'database.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);

    $user = $stmt->fetch();
    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['userid'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: Dashboard.blade.php"); // Redirigez l'utilisateur vers le panel admin
            exit;
        } else {
            $_SESSION['message'] = "Mot de passe incorrect!";
            header("Location: AdminLogin.blade.php");
            exit;
        }
    } else {
        $_SESSION['message'] = "Email incorrect!";
        header("Location: AdminLogin.blade.php");
        exit;
    }
}
?>
