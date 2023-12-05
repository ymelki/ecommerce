<?php
// 1 recuperation des données
var_dump($_POST);
//  envoyé du formulaire

// stocké les données dans des variables
$nom=$_POST['nomProduit'];
$prix=$_POST['prixProduit'];

// 2 Connecte a la B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');

// 3 requete d'insertion
// $statement=$pdo->query("INSERT INTO produit (nom, prix) 
//                        VALUES ('$nom', '$prix')");
$statement=$pdo->prepare("INSERT INTO produit (nom, prix) 
                          VALUES (:nom_protege, :prix_protege)");
$statement->bindParam(':nom_protege', $nom, PDO::PARAM_STR);
$statement->bindParam(':prix_protege', $prix, PDO::PARAM_INT);

$statement->execute();

// 4 rediriger vers la page des produits
header("location:/produits");
?>
