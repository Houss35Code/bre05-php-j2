<?php
// Récupération des données
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm-password'];

// 1. Vérification des mots de passe
if ($password === $confirm) {
    echo "Vérification des mots de passe : OK <br>";
} else {
    echo "Vérification des mots de passe : NOK <br>";
}

// 2. Vérification de la newsletter avec isset()
// Une checkbox non cochée n'est pas envoyée dans $_POST
$newsletter = isset($_POST['newsletter']) ? "Oui" : "Non";

echo "Email : $email | Mot de passe : $password | Newsletter : $newsletter";
?>