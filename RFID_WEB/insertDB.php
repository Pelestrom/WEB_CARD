<?php
require 'database.php';

if (!empty($_POST)) {
    // Récupérer les valeurs du formulaire POST
    $name = $_POST['name'];
    $id = $_POST['id'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Insérer les données
    try {
        $sql = "INSERT INTO users (name, id, gender, email, mobile) VALUES (?, ?, ?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute([$name, $id, $gender, $email, $mobile]);
        header("Location: user_data.php");
        exit;
    } catch (PDOException $e) {
        echo 'Erreur d\'insertion : ' . $e->getMessage();
    }
}
?>
