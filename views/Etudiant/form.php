<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire ajout étudiant</title>
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
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        /* Style des boutons */
        input[type="reset"],
        input[type="submit"] {
            width: 48%;
            padding: 10px;
            margin-top: 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        input[type="reset"] {
            background-color: #dc3545;
            color: white;
        }
        input[type="reset"]:hover {
            background-color: #c82333;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
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
    <form action="../../controllers/EtudiantCtrl.php" method="post">
        <h1>Formulaire ajout étudiant</h1>
        <a href="../../controllers/EtudiantCtrl.php?action=liste" style="display: block; text-align: center; margin-bottom: 15px; color: #007bff;">Aller à la liste des étudiants</a>
        <table>
            <tr>
                <td>MATRICULE</td>
                <td><input type="text" name="matricule" autocomplete="off" required></td>
            </tr>
            <tr>
                <td>NOM</td>
                <td><input type="text" name="nom" autocomplete="off" required></td>
            </tr>
            <tr>
                <td>PRENOM</td>
                <td><input type="text" name="prenom" required></td>
            </tr>
            <tr>
                <td>SEXE</td>
                <td>
                    <select name="sexe" required>
                        <option value="">Veuillez choisir le sexe de l'étudiant</option>
                        <option value="H">Homme</option>
                        <option value="F">Femme</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>TEL</td>
                <td><input type="number" name="tel" required></td>
            </tr>
            <tr>
                <td>DATE DE NAISSANCE</td>
                <td><input type="date" name="ddn" required></td>
            </tr>
            <tr>
                <input type="hidden" name="action" value="ajout">
                <td colspan="2" style="text-align: center">
                    <input type='reset' value="VIDER"> 
                    <input type='submit' value="AJOUTER">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
