<?php
$id=$_GET['id'];
// remplacer les tableau en B.D.
// 1 . Connecte à la B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');

// 2 . Requete 
$statement=$pdo->query("select * from produit  where id = $id");

// 3 . Recupere
$produit=$statement->fetch(PDO::FETCH_ASSOC);
var_dump($produit);
// tableau via la B.D.

// tableau de produits 
// $produits[0]=[
//     "id"=>1,
//     "nom"=>"ordinateur",
//     "prix"=>3000
//   ];
//   $produits[1]=[
//     "id"=>2,
//     "nom"=>"livre",
//     "prix"=>50
//   ];
//   $produits[2]=[
//     "id"=>3,
//     "nom"=>"telephone",
//     "prix"=>100
//   ];
//   $produits[3]=[
//     "id"=>4,
//     "nom"=>"trotinnete",
//     "prix"=>300
//   ];
// // var_dump($_GET);
// $id=$_GET['id']-1;
// 

// ID <?=$produits[$id]['id'];  ?><br>
<?php 
// Nom : <?=$produits[$id]['nom'];  ?> <br>
<?php // Prix : <?=$produits[$id]['prix'];  ?><br>
<?php // La page du produit
?>
Nom : <?=$produit['nom'];  ?> <br>
Prix : <?=$produit['prix'];  ?><br>
 La page du produit
