<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une Salle</title>
    <style>
        /* Style de base */
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f9f9f9; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            height: 100vh; 
            margin: 0;
            padding: 20px;
        }
        form { 
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
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
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
        button:hover {
            background-color: #218838;
        }
        a {
            display: block;
            text-align: center;
            margin-bottom: 15px;
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form action="../../controllers/SalleCtrl.php" method="post">
        <a href="liste.php">Aller à la liste des Salles</a>
        <h2>Ajouter une Salle</h2>
        <input type="hidden" name="action" value="ajout">
        
        <label>Numéro :</label>
        <input type="number" name="numero" required>
        
        <label>Libellé :</label>
        <input type="text" name="libelle" required>
        
        <label>Nombre d'Étudiants :</label>
        <input type="number" name="nbre_etudiant" required>
        
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>

