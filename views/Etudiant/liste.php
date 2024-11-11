<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
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
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .message {
            color: green;
            font-size: large;
            margin-bottom: 20px;
        }
        
        /* Style du tableau */
        table {
            border-collapse: collapse;
            width: 90%;
            max-width: 1000px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        th, td {
            padding: 10px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: #ffffff;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        /* Style des liens d'action */
        .actions a {
            padding: 5px 10px;
            margin: 0 5px;
            border-radius: 4px;
            color: #ffffff;
            font-weight: bold;
            text-decoration: none;
        }
        .actions a.modify {
            background-color: #28a745;
        }
        .actions a.modify:hover {
            background-color: #218838;
        }
        .actions a.delete {
            background-color: #dc3545;
        }
        .actions a.delete:hover {
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
    <h1>Liste des étudiants</h1>
    <a href="../../controllers/EtudiantCtrl.php?action=form">Aller au formulaire d'ajout</a> <br>

    <?php 
    if(isset($_GET['message'])){
        echo "<div class='message'>" . htmlspecialchars($_GET['message']) . "</div>";
    }
    ?>

    <?php
    require_once('../../models/EtudiantService.php');
    $etService = new EtudiantService();
    $etudiants = $etService->getAll();
    ?>

    <table>
        <tr>
            <th>MATRICULE</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>SEXE</th>
            <th>TÉLÉPHONE</th>
            <th>DATE DE NAISSANCE</th>
            <th>ACTIONS</th>
        </tr>
        <?php foreach($etudiants as $et): ?>
        <tr>
            <td><?php echo htmlspecialchars($et['matricule']); ?></td>
            <td><?php echo htmlspecialchars($et['nom']); ?></td>
            <td><?php echo htmlspecialchars($et['prenom']); ?></td>
            <td><?php echo htmlspecialchars($et['sexe']); ?></td>
            <td><?php echo htmlspecialchars($et['tel']); ?></td>
            <td><?php echo htmlspecialchars($et['ddn']); ?></td>
            <td class="actions">
                <a href="../../controllers/EtudiantCtrl.php?action=editForm&matricule=<?php echo urlencode($et['matricule']); ?>" class="modify">MODIFIER</a>
                <a href="../../controllers/EtudiantCtrl.php?action=delete&matricule=<?php echo urlencode($et['matricule']); ?>" class="delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">SUPPRIMER</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
