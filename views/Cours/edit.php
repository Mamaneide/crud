<?php
require_once("../../models/CoursService.php");
$coursService = new CoursService();
$cours = $coursService->getCoursById($_GET['idc']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Cours</title>
    <style>
        /* Style de base */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="../../controllers/CoursCtrl.php" method="post">
        <h1>Modifier un Cours</h1>
        <input type="hidden" name="action" value="modifier">
        <input type="hidden" name="idc" value="<?= htmlspecialchars($cours['idc']) ?>">
        
        <label>Libellé :</label>
        <input type="text" name="libelle" value="<?= htmlspecialchars($cours['libelle']) ?>" required>
        
        <label>ID Enseignant :</label>
        <input type="number" name="iden" value="<?= htmlspecialchars($cours['iden']) ?>" required>
        
        <label>Matricule Étudiant :</label>
        <input type="number" name="matricule" value="<?= htmlspecialchars($cours['matricule']) ?>" required>
        
        <label>ID Salle :</label>
        <input type="number" name="ids" value="<?= htmlspecialchars($cours['ids']) ?>" required>
        
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>

