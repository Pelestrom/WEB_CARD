<?php
    require 'database.php';
 
    $id = null;
    if (!empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if (!empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
        $id = $_POST['id'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
         
        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE users SET name = ?, gender = ?, email = ?, mobile = ? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($name, $gender, $email, $mobile, $id));
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }

        header("Location: user data.php");
    }
?>
