<?php
require_once("../models/SalleService.php");

$salleService = new SalleService();

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'ajout') {
        $salleService->addSalle($_POST['numero'], $_POST['libelle'], $_POST['nbre_etudiant']);
        header("Location: ../views/Salle/liste.php");
    } elseif ($_POST['action'] == 'modifier') {
        $salleService->updateSalle($_POST['ids'], $_POST['numero'], $_POST['libelle'], $_POST['nbre_etudiant']);
        header("Location: ../views/Salle/liste.php");
    }
} elseif (isset($_GET['action']) && $_GET['action'] == 'supprimer') {
    $salleService->deleteSalle($_GET['ids']);
    header("Location: ../views/Salle/liste.php");
} elseif (isset($_GET['action']) && $_GET['action'] == 'liste') {
    $salles = $salleService->getAllSalles();
    include("../views/Salle/liste.php");
}
?>
