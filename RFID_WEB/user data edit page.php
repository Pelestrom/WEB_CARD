<?php
    require 'database.php';
    $id = null;
    if (!empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM users WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
     <link rel="stylesheet" href=" user data edit page.css" />
     <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
    
    
    <title>MODIFICATION</title>
    
</head>
    
<body>
    <div class="container">
 
        <div class="justify-content-center" style="width:490px;margin-left: 400px;margin-top:75px">
            <div class="row">
                <div class="card-text bg-success  shadow">
					<h1 class="text-light ">MODIFIER LES DONNEES DE CET UTILISATEUR</h1>
				</div>
                <p id="defaultGender" hidden><?php echo $data['gender'];?></p>
            </div>
     
            <form class="form-horizontal shadow" action="user data edit tb.php?id=<?php echo $id?>" method="post">
                <div class="control-group">
                    <label class="control-label">ID</label>
                    <div class="controls">
                        <input name="id" type="text"  placeholder="" value="<?php echo $data['id'];?>" readonly>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label">NOM ET PRENOMS</label>
                    <div class="controls">
                        <input name="name" type="text"  placeholder="" value="<?php echo $data['name'];?>" required>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label">GENRE</label>
                    <div class="controls">
                        <select name="gender" id="mySelect">
                            <option value="MASCULIN">MASCULIN</option>
                            <option value="FEMININ">FEMININ</option>
                        </select>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label">EMAIL</label>
                    <div class="controls">
                        <input name="email" type="text" placeholder="" value="<?php echo $data['email'];?>" required>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label">MOBILE NUMBER</label>
                    <div class="controls">
                        <input name="mobile" type="text"  placeholder="" value="<?php echo $data['mobile'];?>" required>
                    </div>
                </div>
                <br> 
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a class="btn btn-dark" href="user data.php">Back</a>
                </div> <br>
            </form>
        </div>               
    </div> <!-- /container -->    
    
    <script>
        var g = document.getElementById("defaultGender").innerHTML;
        if (g == "Male") {
            document.getElementById("mySelect").selectedIndex = "0";
        } else {
            document.getElementById("mySelect").selectedIndex = "1";
        }
    </script>
</body>
</html>
