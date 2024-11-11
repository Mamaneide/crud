<?php
require_once("../../models/SalleService.php");
$salleService = new SalleService();
$salles = $salleService->getAllSalles();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Salles</title>
    <style>
        /* Style de base */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
        }
        .action-btn, a {
            display: inline-block;
            padding: 10px 15px;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            text-align: center;
            margin: 10px;
        }
        .action-btn {
            background-color: #28a745;
        }
        .action-btn.delete {
            background-color: #e74c3c;
        }
        .action-btn:hover {
            opacity: 0.9;
        }
        table {
            width: 90%;
            max-width: 1000px;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: #ffffff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Liste des Salles</h1>
    <a href="form.php" class="action-btn">Ajouter une Salle</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Numéro</th>
            <th>Libellé</th>
            <th>Nombre d'Étudiants</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($salles as $salle): ?>
            <tr>
                <td><?= htmlspecialchars($salle['ids']) ?></td>
                <td><?= htmlspecialchars($salle['numero']) ?></td>
                <td><?= htmlspecialchars($salle['libelle']) ?></td>
                <td><?= htmlspecialchars($salle['nbre_etudiant']) ?></td>
                <td>
                    <a href="edit.php?ids=<?= $salle['ids'] ?>" class="action-btn">Modifier</a>
                    <a href="../../controllers/SalleCtrl.php?action=supprimer&ids=<?= $salle['ids'] ?>" class="action-btn delete">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

