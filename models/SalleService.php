<?php
require_once("Provider.php");

class SalleService {
    private $connexion;

    function __construct() {
        $provider = new Provider();
        $this->connexion = $provider->getConnection();
    }

    public function getAllSalles() {
        $stmt = $this->connexion->query("SELECT * FROM salle");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getSalleById($ids) {
        $requete = 'SELECT * FROM cours WHERE ids = :ids';
        $stat = $this->connexion->prepare($requete);
        $stat->execute(['ids' => $ids]);
        return $stat->fetch(PDO::FETCH_ASSOC);
    }

    public function addSalle($numero, $libelle, $nbre_etudiant) {
        $stmt = $this->connexion->prepare("INSERT INTO salle (numero, libelle, nbre_etudiant) VALUES (:numero, :libelle, :nbre_etudiant)");
        return $stmt->execute(['numero' => $numero, 'libelle' => $libelle, 'nbre_etudiant' => $nbre_etudiant]);
    }

    public function updateSalle($ids, $numero, $libelle, $nbre_etudiant) {
        $stmt = $this->connexion->prepare("UPDATE salle SET numero = :numero, libelle = :libelle, nbre_etudiant = :nbre_etudiant WHERE ids = :ids");
        return $stmt->execute(['ids' => $ids, 'numero' => $numero, 'libelle' => $libelle, 'nbre_etudiant' => $nbre_etudiant]);
    }

    public function deleteSalle($ids) {
        $stmt = $this->connexion->prepare("DELETE FROM salle WHERE ids = :ids");
        return $stmt->execute(['ids' => $ids]);
    }
}
?>
