
<?php
// Paramètres de connexion
$host = '127.0.0.1';  // ou 'localhost'
$db   = 'SECURITY_CARD';
$user = 'root';
$pass = '0140087183';
$charset = 'utf8mb4';

// DSN (Data Source Name) string
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Options de PDO
$options = array(
    // Activer le mode d'erreur exception
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,  
     // Mode de récupération par défaut (ici on utilise FETCH_OBJ)
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,   
    // Désactiver l'émulation des requêtes préparées      
    PDO::ATTR_EMULATE_PREPARES   => false,    
    // Connexion persistante               
    PDO::ATTR_PERSISTENT         => true,                    
);

try {
    // Création de l'objet PDO
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connexion réussie !";
} catch (PDOException $e) {
    // Gérer les erreurs de connexion
    echo 'Erreur de connexion : ' . $e->getMessage();
}
?>
