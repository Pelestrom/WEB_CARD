<?php
// login.php
session_start();

// Identifiants valides
$valid_username = "pelestrom";
$valid_password = "0140087183";

// Récupérer les informations de connexion
$username = $_POST['username'];
$password = $_POST['password'];

// Vérifier les identifiants
if ($username === $valid_username && $password === $valid_password) {
    // Connexion réussie, créer une session
    $_SESSION['loggedin'] = true;
    header("Location: home.php");
    exit();
} else {
    // Connexion échouée, afficher un message d'erreur
    echo "Nom d'utilisateur ou mot de passe incorrect.";
}
?>
