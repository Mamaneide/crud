<?php
require_once("../models/Provider.php");

class RegisterController {
    private $connexion;

    function __construct() {
        $provider = new Provider();
        $this->connexion = $provider->getConnection();
    }

    public function register($username, $email, $password) {
        $stmt = $this->connexion->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        return $stmt->execute([
            'username' => $username,
            'email' => $email,
            'password' => md5($password)  // Pour plus de sécurité, utilisez password_hash
        ]);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $register = new RegisterController();
    if ($register->register($username, $email, $password)) {
        header("Location:../views/index.php");
    } else {
        echo "Erreur lors de l'inscription";
    }
}
?>
