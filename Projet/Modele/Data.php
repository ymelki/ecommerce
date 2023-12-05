<?php
// relation avec la B.D.
class Data {
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');
    }
    public function getProduitCategorie($id){
            $statement=$this->pdo->prepare("SELECT 
                                            p.id as id,
                                            p.nom as produit_nom,
                                            p.prix,
                                            c.nom as categorie_nom
                                             FROM produit p
                                    LEFT JOIN categorie C 
                                    ON p.id_categorie=c.id 
                                    where c.id=:monidprotege");
            $statement->bindParam(':monidprotege', $id, PDO::PARAM_INT);
        
            $statement->execute();
            // 3 . Recupere
            $array=$statement->fetchAll(PDO::FETCH_ASSOC);
            return $array;
    

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
    public function insertRow($nom, $prix, $categorie){
        $statement=$this->pdo->prepare("INSERT INTO produit (nom, prix, id_categorie) 
        VALUES (:nom_protege, :prix_protege, :macategorie)");
        $statement->bindParam(':nom_protege', $nom, PDO::PARAM_STR);
        $statement->bindParam(':prix_protege', $prix, PDO::PARAM_INT);
        $statement->bindParam(':macategorie', $categorie, PDO::PARAM_INT);

        $statement->execute();
 
    }

}
// $pdo = new \PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');
?>