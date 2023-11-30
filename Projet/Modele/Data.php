<?php
// relation avec la B.D.
class Data {
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');
    }
    // recuperer toutes les lignes
    public function getRows($table){
       
        // 2 requete
        $statement=$this->pdo->query("select * from $table");

        // 3 recuperation des données
        $array=$statement->fetchAll(PDO::FETCH_ASSOC);

        return $array;

    }
    // recuperer une seule ligne
    public function getRow($table, $id){
        $statement=$this->pdo->prepare("select * from $table  where id = :id_protege");
        $statement->bindParam(':id_protege', $id, PDO::PARAM_INT);
        
        $statement->execute();
        // 3 . Recupere
        $array=$statement->fetch(PDO::FETCH_ASSOC);
        return $array;
    }

    // recuperer une seule ligne
    public function deleteRow($table, $id){
        $statement=$this->pdo->prepare("DELETE FROM $table  where id = :id_protege");
        $statement->bindParam(':id_protege', $id, PDO::PARAM_INT);
        
        $statement->execute();
    }

    // insert une seule ligne
    public function insertRow(){

    }
}
// $pdo = new \PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');
?>