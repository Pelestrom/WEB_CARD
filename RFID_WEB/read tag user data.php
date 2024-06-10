<?php
require 'database.php';

$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if ($id) {
    try {
        // Préparer et exécuter la requête pour récupérer les données de l'utilisateur
        $sql = "SELECT * FROM  users WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute([$id]);
        $data = $q->fetch(PDO::FETCH_ASSOC);

        $msg = null;
        if (!$data) {
            // Si aucune donnée n'est trouvée pour l'ID donné
            $msg = "L'UID de votre carte n'est pas enregistré !!!";
            $data = [
                'id' => $id,
                'name' => "--------",
                'gender' => "--------",
                'email' => "--------",
                'mobile' => "--------"
            ];
        }
    } catch (PDOException $e) {
        // Gérer les erreurs de requête
        echo 'Erreur de requête : ' . $e->getMessage();
        $data = [
            'id' => $id,
            'name' => "--------",
            'gender' => "--------",
            'email' => "--------",
            'mobile' => "--------"
        ];
        $msg = "Une erreur s'est produite lors de la récupération des données.";
    }
} else {
    // Si aucun ID n'est fourni dans la requête
    $data = [
        'id' => "--------",
        'name' => "--------",
        'gender' => "--------",
        'email' => "--------",
        'mobile' => "--------"
    ];
    $msg = "Aucun ID fourni.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="read tag user data.css" />
     <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
   
    
</head>
<body>
    <div>
        <form>
            <table width="452" border="1" bordercolor="#10a0c5" align="center" cellpadding="0" cellspacing="1" bgcolor="#000" style="padding: 2px">
                <tr>
                    <td height="40" align="center" bgcolor="#10a0c5">
                        <font color="#FFFFFF"><b>DONNEES UTILISATEUR</b></font>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f9">
                        <table width="452" border="0" align="center" cellpadding="5" cellspacing="0">
                            <tr>
                                <td width="113" align="left" class="lf">ID</td>
                                <td style="font-weight:bold">:</td>
                                <td align="left"><?php echo htmlspecialchars($data['id']); ?></td>
                            </tr>
                            <tr bgcolor="#f2f2f2">
                                <td align="left" class="lf">NOM ET PRENOMS</td>
                                <td style="font-weight:bold">:</td>
                                <td align="left"><?php echo htmlspecialchars($data['name']); ?></td>
                            </tr>
                            <tr>
                                <td align="left" class="lf">GENRE</td>
                                <td style="font-weight:bold">:</td>
                                <td align="left"><?php echo htmlspecialchars($data['gender']); ?></td>
                            </tr>
                            <tr bgcolor="#f2f2f2">
                                <td align="left" class="lf">EMAIL</td>
                                <td style="font-weight:bold">:</td>
                                <td align="left"><?php echo htmlspecialchars($data['email']); ?></td>
                            </tr>
                            <tr>
                                <td align="left" class="lf">NUMERO MOBILE</td>
                                <td style="font-weight:bold">:</td>
                                <td align="left"><?php echo htmlspecialchars($data['mobile']); ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <p style="color:red;"><?php echo htmlspecialchars($msg); ?></p>
</body>
</html>
