<?php
  // routeur : gestion des URL 
  // integre ce qui est transverse a toutes les pages
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
elseif ($page==="/categorie"){
  include "categorie.php";
}
elseif ($page==="/produit"){
  include "produit.php";
}
else {
  include "erreur.php";
}
include "footer.php";
?>
