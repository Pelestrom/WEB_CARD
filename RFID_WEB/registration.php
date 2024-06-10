<?php
    $Write = "<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
    file_put_contents('UIDContainer.php', $Write);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
     <link rel="stylesheet" href="registration.css" />
     <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <script>
        $(document).ready(function(){
             $("#getUID").load("UIDContainer.php");
            setInterval(function() {
                $("#getUID").load("UIDContainer.php");
            }, 500);
        });
    </script>
     <title>ENREGISTREMENT</title>
</head>

<body>
<header class="container-fluid" >
		
     	<ul class="topnav" >
			<div>	<li><a class="active" href="home.php">Home</a></li>
			<li><a href="user data.php">Donnée utilisateurs</a></li>
			<li><a href="registration.php">Enregistrer</a></li>
			<li><a href="read tag.php">Lecture de carte</a></li></div>
		<div><img  style="width: 60px;heigth:80px; margin-left:900px"src="image/inphb-removebg-preview.png" alt=""></div>
			
		</ul>
		
    </header>
	 <div class="container d-flex justify-content-center shadow " >
            <div class="row">
                <div class="card-text">
					<h1 class="text-light " > ENREGISTRER</h1>
				</div>
               
			</div>
        </div>

    <div>
        <br>
        <div class="center" style="margin: 0 auto; width:600px;border-radius: 40px; background-color:  rgb(225, 152, 14)" >
            <div class="row bg-dark">
                <h1  style="color: white;"align="center">Formulaire</h1>
            </div>
            <br>
            <form class="form-horizontal " action="insertDB.php" method="post" >
                <div class="control-group">
                    <label style="color:black"  class="control-label">ID</label>
                    <div class="controls">
                        <input name="id" id="getUID" placeholder="SVP Scannez votre carte" rows="1" cols="1" required></input >
                    </div>
                </div>
                
                <div class="control-group">
                    <label style="color:black"  class="control-label">NOM ET PRENOMS</label>
                    <div class="controls">
                        <input id="div_refresh" name="name" type="text"  placeholder="" required>
                    </div>
                </div>
                
                <div class="control-group">
                    <label style="color:black"  class="control-label">GENRE</label>
                    <div class="controls">
                        <select name="gender">
                            <option value="MASCULIN">MASCULIN</option>
                            <option value="FEMININ">FEMININ</option>
                        </select>
                    </div>
                </div>
                
                <div class="control-group">
                    <label style="color:black" class="control-label">EMAIL</label>
                    <div class="controls">
                        <input name="email" type="text" placeholder="" required>
                    </div>
                </div>
                
                <div class="control-group">
                    <label style="color:black"  class="control-label">MOBILE</label>
                    <div class="controls">
                        <input name="mobile" type="text"  placeholder="" required>
                    </div>
                </div>
                
                <div style="margin-top:15px;" class="form-actions">
                    <button href="user data.php"  type="submit" class="btn btn-dark">  SAVE</button>
                </div>
            </form>
            
        </div>               
    </div> <!-- /container -->	
</body>
</html>
