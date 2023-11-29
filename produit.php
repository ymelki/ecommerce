<?php
// tableau de produits 
$produits[0]=[
    "id"=>1,
    "nom"=>"ordinateur",
    "prix"=>3000
  ];
  $produits[1]=[
    "id"=>2,
    "nom"=>"livre",
    "prix"=>50
  ];
  $produits[2]=[
    "id"=>3,
    "nom"=>"telephone",
    "prix"=>100
  ];
  $produits[3]=[
    "id"=>4,
    "nom"=>"trotinnete",
    "prix"=>300
  ];
var_dump($_GET);
$id=$_GET['id']-1;
?>
ID <?=$produits[$id]['id'];  ?><br>
Nom : <?=$produits[$id]['nom'];  ?> <br>
Prix : <?=$produits[$id]['prix'];  ?><br>
La page du produit