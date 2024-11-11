<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Cours</title>
    <style>
        /* Styles de base */
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
            background-color: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 320px;
            text-align: center;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 1.5em;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #333;
            text-align: left;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1em;
        }

        /* Styles du bouton */
        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }

        /* Lien vers la liste */
        .back-link {
            display: block;
            margin-bottom: 20px;
            color: #007bff;
            font-weight: bold;
            text-decoration: none;
            font-size: 0.9em;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form action="../../controllers/CoursCtrl.php" method="post">
        <a href="liste.php" class="back-link">← Retour à la liste des cours</a>
        <h1>Ajouter un Cours</h1>
        <input type="hidden" name="action" value="ajout">

        <label>Libellé :</label>
        <input type="text" name="libelle" placeholder="Entrez le libellé du cours" required>

        <label>ID Enseignant :</label>
        <input type="number" name="iden" placeholder="Entrez l'ID de l'enseignant" required>

        <label>Matricule Étudiant :</label>
        <input type="number" name="matricule" placeholder="Entrez le matricule de l'étudiant" required>

        <label>ID Salle :</label>
        <input type="number" name="ids" placeholder="Entrez l'ID de la salle" required>

        <button type="submit">Ajouter le cours</button>
    </form>
</body>
</html>

