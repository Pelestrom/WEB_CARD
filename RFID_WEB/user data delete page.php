<?php
    require 'database.php';
    $id = 0;
     
    if (!empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if (!empty($_POST)) {
        // Garder les valeurs post
        $id = $_POST['id'];
         
        // Supprimer les données
        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM users WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($id));
            header("Location: user data.php");
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
    <title>SUPPRESSION</title>
</head>
 
<body>
       <br> <br>
<div class="container">
        <div class="span10 offset1">
             <div class="card-text bg-danger shadow">
					<h1 class="text-light ">SUPPRIMER UTILISATEUR</h1>
				</div>
               

            <form class="form-horizontal" action="user data delete page.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id;?>"/> <br> <br>
                <p class="alert alert-error"> <b>VOULEZ-VOUS VRAIMENT SUPPRIMER CET UTILISATEUR ?</b> </p>
                <div class="form-actions">
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <a class="btn btn-success" href="user data.php">No</a>
                </div>
            </form>
        </div>
    </div>  
</body>
</html>
