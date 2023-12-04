<?php
require __DIR__.'/../Modele/Data.php';
$db=new Data();
$action=$_GET['action'];

// lister tout les produits
// route : index.php/produits?action=readall
if ($action==="readall"){
    $produits=$db->getRows("produit");
    var_dump($produits);

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

// suprimer un produit