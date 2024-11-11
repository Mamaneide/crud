<?php

class Provider{
    private $host='fdb1030.awardspace.net';
    private $dbName="4548846_crud";
    private $user="4548846_crud";
    private $password="idesto@idesto9135";


    public function getconnection(){
        $con=new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->user,  $this->password);
        if($con){
            //echo 'Connexion etablie!!!!';
        return $con;
    }else
        return null;
            //echo "Erreur connexion";
    }
}



$p=new Provider();
$p->getconnection();
