<?php
  // routeur : gestion des URL 
  // integre ce qui est transverse a toutes les pages
include "header.php";

// var_dump($_SERVER);
$page=$_SERVER['PATH_INFO'];
echo $page;
if ($page==="/accueil"){
  include "accueil.php";
}
if ($page==="/produit"){
  include "produit.php";
}
include "footer.php";
?>
