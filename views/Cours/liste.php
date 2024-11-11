<?php
require_once("../../models/CoursService.php");
$coursService = new CoursService();
$coursList = $coursService->getCours();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Cours</title>
    <style>
        /* Style de base */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        .action-link, .action-btn {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 15px;
            padding: 8px 12px;
            border-radius: 4px;
            background-color: #4CAF50;
            color: #ffffff;
        }
        .action-link:hover {
            text-decoration: underline;
        }
        
        /* Style du tableau */
        table {
            width: 90%;
            max-width: 1000px;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px 15px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: #ffffff;
            font-weight: bold;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        
        /* Boutons d'action */
        .action-btn {
            padding: 6px 12px;
            border-radius: 4px;
            font-weight: bold;
            text-decoration: none;
            color: #ffffff;
            cursor: pointer;
        }
        .action-btn.modify {
            background-color: #28a745;
        }
        .action-btn.modify:hover {
            background-color: #218838;
        }
        .action-btn.delete {
            background-color: #e74c3c;
            border: none;
        }
        .action-btn.delete:hover {
            background-color: #c82333;
        }
        
        /* Style responsive */
        @media (max-width: 600px) {
            table, th, td {
                font-size: 0.9em;
            }
            h1 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
    <h1>Liste des Cours</h1>
    <a href="form.php" class="action-link">Ajouter un Cours</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Libellé</th>
            <th>ID Enseignant</th>
            <th>Matricule Étudiant</th>
            <th>ID Salle</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($coursList as $cours): ?>
            <tr>
                <td><?= htmlspecialchars($cours['idc']) ?></td>
                <td><?= htmlspecialchars($cours['libelle']) ?></td>
                <td><?= htmlspecialchars($cours['iden']) ?></td>
                <td><?= htmlspecialchars($cours['matricule']) ?></td>
                <td><?= htmlspecialchars($cours['ids']) ?></td>
                <td>
                    <a href="edit.php?idc=<?= urlencode($cours['idc']) ?>" class="action-btn modify">Modifier</a>
                    <form action="../../controllers/CoursCtrl.php" method="post" style="display:inline;">
                        <input type="hidden" name="action" value="supprimer">
                        <input type="hidden" name="idc" value="<?= htmlspecialchars($cours['idc']) ?>">
                        <button type="submit" class="action-btn delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce cours ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

