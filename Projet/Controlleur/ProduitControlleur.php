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
    //echo "controlleur cree";
      // ramene la vue
      include __DIR__.'/../Vue/CreerProduitVue.php';
}

// suprimer un produit
