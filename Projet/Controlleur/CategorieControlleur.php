<?php
 echo "test25";
// read all categorie
require __DIR__.'/../Modele/Data.php';
$db=new Data();
$action=$_GET['action'];

if ($action==="readall"){

    $categories=$db->getRows("categorie");
    var_dump($categories);

    // ramene la vue
    include __DIR__.'/../Vue/CategoriesVue.php';
}

if ($action==="readone"){

    // click on one category
    $id=$_GET['id'];
    $categoryAndProduit=$db->getProduitCategorie($id);
    var_dump($categoryAndProduit); 
    include __DIR__.'/../Vue/categoryAndProduitVue.php';
 
}

