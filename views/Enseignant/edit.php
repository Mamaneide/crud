<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification enseignant</title>
    <style>
        /* Style de base */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        /* Style du formulaire */
        form {
            background-color: #ffffff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        table {
            width: 100%;
        }
        td {
            padding: 10px;
            vertical-align: middle;
        }
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        /* Style du bouton */
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            background-color: #28a745;
            color: #ffffff;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        /* Style responsive */
        @media (max-width: 600px) {
            form {
                width: 90%;
                padding: 10px;
            }
            h1 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
     <?php
    $iden=$_GET['iden'];
    require_once('../../models/EnseignantService.php');
    $etService=new EnseignantService();
    $enseignant=$etService->getByIden($iden);
    //var_dump($enseignant);
    ?>
    <form action="../../controllers/EnseignantCtrl.php" method="post">
        <h1>Formulaire modification enseignant</h1>
        
        <table>
            <tr>
                <td>IDEN</td>
                <td><input type="text" name="iden" readonly value="<?= htmlspecialchars($enseignant['iden']) ?>" autocomplete="off" required></td>
            </tr>
            <tr>
                <td>NOM</td>
                <td><input type="text" name="nom" value="<?= htmlspecialchars($enseignant['nom']) ?>" autocomplete="off" required></td>
            </tr>
            <tr>
                <td>PRENOM</td>
                <td><input type="text" name="prenom" value="<?= htmlspecialchars($enseignant['prenom']) ?>" required></td>
            </tr>
            <tr>
                <td>SEXE</td>
                <td>
                    <select name="sexe" required>
                        <option value="">Veuillez choisir le sexe de l'enseignant</option>
                        <option value="H" <?= $enseignant['sexe'] == 'H' ? 'selected' : '' ?>>Homme</option>
                        <option value="F" <?= $enseignant['sexe'] == 'F' ? 'selected' : '' ?>>Femme</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td><input type="email" name="email" value="<?= htmlspecialchars($enseignant['email']) ?>" required></td>
            </tr>
            <tr>
                <td>ADRESSE</td>
                <td><input type="text" name="adresse" value="<?= htmlspecialchars($enseignant['adresse']) ?>" required></td>
            </tr>
            <tr>
                <input type="hidden" name="action" value="modifier">
                <td colspan="2" style="text-align: center">
                    <input type="submit" value="MODIFIER">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
