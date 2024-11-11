<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Salle</title>
    <style>
        /* Style de base */
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f9f9f9;
            display: flex; 
            justify-content: center;
            align-items: center;
            height: 100vh; 
            margin: 0;
        }
        form { 
            width: 350px;
            padding: 20px;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 { 
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
        }
        input[type="text"], input[type="number"] { 
            width: 100%; 
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        button { 
            width: 100%; 
            padding: 10px;
            color: white; 
            background-color: #28a745; 
            border: none; 
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover { 
            background-color: #218838;
        }
    </style>
</head>
<body>
    <?php
    require_once("../../models/SalleService.php");
    $salleService = new SalleService();
    // Récupérer les informations de la salle
    $salle = $salleService->getSalleById($_GET['ids']);
    ?>
    <form action="../../controllers/SalleCtrl.php" method="post">
        <h2>Modifier la Salle</h2>
        <input type="hidden" name="action" value="modifier">
        <input type="hidden" name="ids" value="<?= htmlspecialchars($salle['ids']) ?>">
        
        <label>Numéro :</label>
        <input type="number" name="numero" value="<?= htmlspecialchars($salle['numero']) ?>" required>
        
        <label>Libellé :</label>
        <input type="text" name="libelle" value="<?= htmlspecialchars($salle['libelle']) ?>" required>
        
        <label>Nombre d'Étudiants :</label>
        <input type="number" name="nbre_etudiant" value="<?= htmlspecialchars($salle['nbre_etudiant']) ?>" required>
        
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>

