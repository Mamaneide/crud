<?php
require_once("../models/CoursService.php");

$coursService = new CoursService();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    if ($action == 'ajout') {
        $libelle = $_POST['libelle'];
        $iden = $_POST['iden'];
        $matricule = $_POST['matricule'];
        $ids = $_POST['ids'];

        $result = $coursService->addCours($libelle, $iden, $matricule, $ids);
        header("Location: ../views/Cours/liste.php?message=" . ($result ? 'success' : 'error'));
    }

    if ($action == 'modifier') {
        $idc = $_POST['idc'];
        $libelle = $_POST['libelle'];
        $iden = $_POST['iden'];
        $matricule = $_POST['matricule'];
        $ids = $_POST['ids'];

        $result = $coursService->updateCours($idc, $libelle, $iden, $matricule, $ids);
        header("Location: ../views/Cours/liste.php?message=" . ($result ? 'updated' : 'error'));
    }

    if ($action == 'supprimer') {
        $idc = $_POST['idc'];
        $result = $coursService->deleteCours($idc);
        header("Location: ../views/Cours/liste.php?message=" . ($result ? 'deleted' : 'error'));
    }
}
?>
