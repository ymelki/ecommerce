<?php
require_once __DIR__.'/../Modele/Data.php';
$db=new Data();
var_dump($_GET);
$action=$_GET['action'];

// lister tout les produits
// route : index.php/produits?action=readall
if ($action==="readall"){
    $produits=$db->getRows("produit");
    var_dump($produits);
   // $arrays=$produits;

    // ramene la vue
    include __DIR__.'/../Vue/ProduitsVue.php';
}

// lister un produit
if ($action==="readone"){
    $id=$_GET['id'];
    $produit=$db->getRow("produit",$id);
    var_dump($produit);

    // ramene la vue
    include __DIR__.'/../Vue/ProduitVue.php';
}

// creer
if ($action==="cree"){
    $categories=$db->getRows("categorie");
    // var_dump($categories);
    //echo "controlleur cree";
      // ramene la vue
      include __DIR__.'/../Vue/CreerProduitVue.php';
}
if ($action==="save"){
    echo "controlleur SAVE";
    // 1 recuperation des données
    var_dump($_POST);
    //  envoyé du formulaire

    // stocké les données dans des variables
    $nom=$_POST['nomProduit'];
    $prix=$_POST['prixProduit'];
    $categorie=$_POST['categorie'];
    $db->insertRow($nom, $prix, $categorie);

        
    // // 2 Connecte a la B.D.
    // $pdo = new \PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');

    // // 3 requete d'insertion
    // // $statement=$pdo->query("INSERT INTO produit (nom, prix) 
    // //                        VALUES ('$nom', '$prix')");
    // $statement=$pdo->prepare("INSERT INTO produit (nom, prix) 
    //                         VALUES (:nom_protege, :prix_protege)");
    // $statement->bindParam(':nom_protege', $nom, PDO::PARAM_STR);
    // $statement->bindParam(':prix_protege', $prix, PDO::PARAM_INT);

    // $statement->execute();
    header("location:/produits?action=readall");

      // ramene la vue

      //include __DIR__.'/../Vue/CreerProduitVue.php';
}
// suprimer un produit
