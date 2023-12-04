<?php
 
// read all categorie
require __DIR__.'/../Modele/Data.php';
$db=new Data();
$categories=$db->getRows("categorie");
var_dump($categories);

// ramene la vue
include __DIR__.'/../Vue/CategoriesVue.php';
