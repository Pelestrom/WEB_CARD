<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexion.css">
    <title>CONNEXION</title>   
</head>
<body>
<div class="container shadow">
    <h2>AUTHENTIFICATION DU GESTIONNAIRE</h2>
    <form action="login.php" method="post">
        <label for="username">Nom :</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
        <label for="zone">Zone:</label>
        <select id="zone" name="zone">
            <option value="classes">Classes</option>
            <option value="laboratoires">Laboratoires</option>
            <option value="residences">Résidences</option>
            <option value="bureaux">Bureaux</option>
        </select>
        <input type="submit" value="Se connecter">
    </form>
    
</div>

</body>
</html>




