<?php
require_once('../models/EnseignantService.php');

$etService = new EnseignantService();

if (isset($_GET['action']))
    $action = $_GET['action'];
if (isset($_POST['action']))
    $action = $_POST['action'];





if ($action == 'form') {
    Header('Location:../views/Enseignant/form.php');
}

if ($action == 'liste') {
    Header('Location:../views/Enseignant/liste.php');
}

if ($action == 'delete') {
    //recuperation des donnees
    $iden=$_GET['iden'];

    //appel du model
    $etService->delete($iden);

    //redirection vers la vue
    Header('Location:../views/Enseignant/liste.php?message=Enseignant supprimé');
 
}




if ($action == 'ajout') {
    //1. recupertaion de donnees
    $iden = $_POST['iden'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];


    //2. Appel du model
    $etService->add($iden, $nom, $prenom, $sexe, $email ,$adresse);

    //3. appel de la vue
    Header('Location:../views/Enseignant/liste.php?message=Enseignant ajouté');
}


if($action=='editForm'){
    $iden=$_GET['iden'];
    Header('Location:../views/Enseignant/edit.php?iden='.$iden);
}




if ($action == 'modifier') {
    //1. recupertaion de donnees
    $iden = $_POST['iden'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];


    //2. Appel du model
    $etService->edit($iden, $nom, $prenom, $sexe, $email, $adresse);

    //3. appel de la vue
    Header('Location:../views/Enseignant/liste.php?message=Enseignant modifié');
}