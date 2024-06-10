<?php
    // Récupérer la valeur UIDresult envoyée en POST
    $UIDresult = $_POST["UIDresult"];

    // Construire le contenu à écrire dans UIDContainer.php
    $Write = "<?php $" . "UIDresult='" . $UIDresult . "'; " . "echo $" . "UIDresult;" . " ?>";

    // Écrire le contenu dans UIDContainer.php
    file_put_contents('UIDContainer.php', $Write);
?>
