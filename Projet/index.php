<?php
/*
Routeur : intercepte l'url :
/produits 
=> controlleur : ProduitControlleur
Qui appelle  le modele et la vue: le controller
*/

  // routeur : gestion des URL 
  // integre ce qui est transverse a toutes les pages
  $page=$_SERVER['PATH_INFO'];
  if ($page==="/produits"){
    include __DIR__."/Controlleur/ProduitControlleur.php";
  }
  die();
  include "header.php";

// var_dump($_SERVER);
// var_dump($_SERVER);
if (isset($_SERVER['PATH_INFO'])){ 
  $page=$_SERVER['PATH_INFO'];
}
else {
  $page="/accueil";
}
echo $page;
if ($page==="/accueil"){
  include "accueil.php";
}
elseif ($page==="/produits"){
  include "produits.php";
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
else {
  include "erreur.php";
}
include "footer.php";
?>
