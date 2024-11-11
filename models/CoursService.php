<?php
require_once("Provider.php");

class CoursService {
    private $connexion;

    public function __construct() {
        $p = new Provider();
        $this->connexion = $p->getconnection();
    }

    public function addCours($libelle, $iden, $matricule, $ids) {
        $requete = 'INSERT INTO cours (libelle, iden, matricule, ids) VALUES (:libelle, :iden, :matricule, :ids)';
        $stat = $this->connexion->prepare($requete);
        return $stat->execute([
            'libelle' => $libelle,
            'iden' => $iden,
            'matricule' => $matricule,
            'ids' => $ids
        ]);
    }

    public function getCours() {
        $requete = 'SELECT * FROM cours';
        $stat = $this->connexion->prepare($requete);
        $stat->execute();
        return $stat->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCoursById($idc) {
        $requete = 'SELECT * FROM cours WHERE idc = :idc';
        $stat = $this->connexion->prepare($requete);
        $stat->execute(['idc' => $idc]);
        return $stat->fetch(PDO::FETCH_ASSOC);
    }

    public function updateCours($idc, $libelle, $iden, $matricule, $ids) {
        $requete = 'UPDATE cours SET libelle = :libelle, iden = :iden, matricule = :matricule, ids = :ids WHERE idc = :idc';
        $stat = $this->connexion->prepare($requete);
        return $stat->execute([
            'idc' => $idc,
            'libelle' => $libelle,
            'iden' => $iden,
            'matricule' => $matricule,
            'ids' => $ids
        ]);
    }

    public function deleteCours($idc) {
        $requete = 'DELETE FROM cours WHERE idc = :idc';
        $stat = $this->connexion->prepare($requete);
        return $stat->execute(['idc' => $idc]);
    }
}
?>
