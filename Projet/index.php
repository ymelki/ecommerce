<?php

include __DIR__.'/Vue/header.php';
if (isset($_SERVER['PATH_INFO'])){ 
  $page=$_SERVER['PATH_INFO'];
}
else {
  $page="/accueil";
}
/*
Routeur : intercepte l'url :
/produits 
=> controlleur : ProduitControlleur
Qui appelle  le modele et la vue: le controller
*/

  // routeur : gestion des URL 
  // integre ce qui est transverse a toutes les pages
//  var_dump($_SERVER);
  // $page=$_SERVER['PATH_INFO'];

  // die();

// var_dump($_SERVER);
// var_dump($_SERVER);

echo $page;
if ($page==="/accueil"){
  include "accueil.php";
}
elseif ($page==="/produits"){
  include __DIR__.'/Controlleur/ProduitControlleur.php';
}
elseif ($page==="/categories"){
  include "categories.php";
}
elseif ($page==="/categorie"){
  include "categorie.php";
}
elseif ($page==="/produit"){
  include "produit.php";
}
elseif ($page==="/creerproduit"){
  include "creerproduit.php";
}
elseif ($page==="/enregistrerproduit"){
  include "enregistrerproduit.php";
}
elseif ($page==="/listeuser"){
  include __DIR__.'/Controlleur/UserController.php';
}

else {
  include "erreur.php";
}
include __DIR__.'/Vue/footer.php';
?>
