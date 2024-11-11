<?php
session_start();
require_once("../models/Provider.php");

class AuthController {
    private $connexion;

    function __construct() {
        $provider = new Provider();
        $this->connexion = $provider->getConnection();
    }

    public function authenticate($username, $password) {
        $stmt = $this->connexion->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $stmt->execute(['username' => $username, 'password' => md5($password)]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $auth = new AuthController();
    $user = $auth->authenticate($username, $password);

    if ($user) {
        $_SESSION['user'] = $user;
        header("Location: ../views/Acceuil.php"); // Redirige vers le tableau de bord
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect";
        header("Location:  ../views/index.php?error=" . urlencode($error));
    }
}
?>
