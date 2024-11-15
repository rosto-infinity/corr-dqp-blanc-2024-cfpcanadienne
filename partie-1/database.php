<?php
// Paramètres de connexion
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electromarket";

try {
    // Créer la connexion PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Définir le mode d'erreur PDO pour générer des exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connexion réussie à la base de données.";
} catch(PDOException $e) {
    echo "Échec de la connexion à la base de données : " . $e->getMessage();
}
?>