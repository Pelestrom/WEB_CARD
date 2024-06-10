<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>
<!DOCTYPE html>
<html lang="en">
<html>
	<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <meta charset="utf-8">
		 <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
         <link rel="stylesheet" href="home.css"/>
		 <script src="js/bootstrap.min.js"></script>
		 <title>HOME</title></head>
	<body>
		<header class="container-fluid" ><ul class="topnav" >
			<div>	<li><a class="active" href="home.php">Home</a></li>
			<li><a href="user data.php">Donnée utilisateurs</a></li>
			<li><a href="registration.php">Enregistrer</a></li>
			<li><a href="read tag.php">Lecture de carte</a></li></div>
		   <div><img  style="width: 60px;heigth:80px; margin-left:900px"src="image/inphb-removebg-preview.png" alt=""></div>
			</ul></header>
	 <div class="container d-flex justify-content-center shadow " >
            <div class="row">
                <div class="card-text">
					<h1 class="text-light "> GESTION DU CONTROLE D'ACCES</h1>
				</div>
               
			</div>
        </div>
	<div class="d-flex justify-content-center" ><img style="width: 700px; heigth:1000px;padding-top:50px" src="image/1375.jpg" alt=""></div>  
	  <footer>
        <p>Contacts: +225 0709703085 +225 0140087183| Emails: klohiri.toure22@inphb.ci pele.ouattara22@inphb.ci | Address: inphb, Yakro</p>
    </footer>
	</body>
</html>