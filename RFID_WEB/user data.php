
<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
     <link rel="stylesheet" href="user data.css" />
		 <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script>
	<title>DONNEES UTILISATEURS</title>
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
	 <div class="container d-flex justify-content-center shadow" style=" background-color: rgb(225, 152, 14);">
            <div class="row" >
                <div class="card-text" >
					        <h1 class="text-light ">Table de donnée utilisateur</h1>
				       </div>
               
			</div>
        </div>
		<br>
		<div class="container ">
             
            <div class="row ">
                <table class="table table-striped table-bordered  bg-light shadow">
                  <thead>
                    <tr  style="background-color: #4CAF50;; color:white ;" >
                      <th>NOM ET PRENOMS</th>
                      <th>ID</th>
					  <th>GENRE</th>
					  <th>EMAIL</th>
                      <th>MOBILE NUMBER</th>
					  <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   // Inclusion du fichier de connexion à la base de données
                    include 'database.php';
					 
                    // Exécution de la requête SQL pour récupérer les données
                    $sql = 'SELECT * FROM users ORDER BY name ASC';
                    foreach ($pdo->query($sql) as $row) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($row->name) . '</td>';
                        echo '<td>' . htmlspecialchars($row->id) . '</td>';
                        echo '<td>' . htmlspecialchars($row->gender) . '</td>';
                        echo '<td>' . htmlspecialchars($row->email) . '</td>';
                        echo '<td>' . htmlspecialchars($row->mobile) . '</td>';
                        echo '<td><a class="btn btn-success" href="user data edit page.php?id=' . $row->id . '">Modifier</a>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="user data delete page.php?id=' . $row->id . '">Supprimer</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                  ?>
                  </tbody>
				</table>
			</div>
		</div> <!-- /container -->
	</body>
</html>