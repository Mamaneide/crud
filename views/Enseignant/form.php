<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire ajout enseignant</title>
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
        /* Style des boutons */
        input[type="submit"],
        input[type="reset"] {
            width: 45%;
            padding: 10px;
            margin-top: 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
        }
        input[type="reset"] {
            background-color: #dc3545;
            color: #fff;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        input[type="reset"]:hover {
            background-color: #c82333;
        }
        a {
            display: inline-block;
            margin-bottom: 20px;
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <form action="../../controllers/EnseignantCtrl.php" method="post">
        <h1>Formulaire ajout enseignant</h1>
        <a href="../../controllers/EnseignantCtrl.php?action=liste">Aller à la liste des enseignants</a>
        
        <table>
            <tr>
                <td>IDEN</td>
                <td><input type="text" name="iden" autocomplete="off" required></td>
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
                        <option value="">Veuillez choisir le sexe de l'enseignant</option>
                        <option value="H">Homme</option>
                        <option value="F">Femme</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>ADRESSE</td>
                <td><input type="text" name="adresse" required></td>
            </tr>
            <tr>
                <input type="hidden" name="action" value="ajout">
                <td colspan="2" style="text-align: center">
                    <input type='reset' value="VIDER"> 
                    &nbsp; &nbsp; &nbsp;&nbsp;
                    <input type='submit' value="AJOUTER">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
