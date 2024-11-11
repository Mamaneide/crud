<?php
require_once('Provider.php');

class EnseignantService
{
    private $connexion;

    function __construct()
    {
        $p = new Provider();
        $this->connexion = $p->getconnection();
    }


    public function add($iden, $nom, $prenom, $sexe, $email, $adresse)
    {
        $requete = 'insert into enseignant (iden, nom, prenom, sexe, email, adresse) values (:mat, :nm, :pr, :sx, :el, :ads)';
        $stat = $this->connexion->prepare($requete);
        $rs = $stat->execute([
            'mat' => $iden,
            'nm' => $nom,
            'pr' => $prenom,
            'sx' => $sexe,
            'el' => $email,
            'ads' => $adresse
        ]);



    }

    public function edit($iden, $nom, $prenom, $sexe, $email, $adresse)
    {

        $requete='update enseignant set nom=:nm, prenom=:pr, sexe=:sx, email=:e, adresse=:ad where iden=:m';
        $stmt=$this->connexion->prepare($requete);
        $result=$stmt->execute([
            'nm'=> $nom,
            'pr'=> $prenom,
            'sx'=> $sexe,
            'e'=> $email,
            'ad'=> $adresse,
            'm'=> $iden
        ]);

    }


    public function getByIden($iden)
    {
        $requete="select * from enseignant where iden=:mat";
        $stmt=$this->connexion->prepare($requete);
        $res=$stmt->execute([
            'mat'=> $iden
        ]);
        $enseignant=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $enseignant[0];
    }

    public function getAll()
    {
        $requete = 'select * from enseignant order by iden desc';
        $st = $this->connexion->query($requete);
        $enseignants = $st->fetchAll(PDO::FETCH_ASSOC);
        return $enseignants;
    }

    public function delete($iden)
    {
        $requete='delete from enseignant where iden=:m';
        $sta=$this->connexion->prepare($requete);
        $res=$sta->execute([
            'm'=> $iden
        ]);
    }

}