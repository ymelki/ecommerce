<?php

// afficher une liste de produits.
// produit issue de la B.D.
// recupere des données et on a les affiche avec
// foreach et le bootstrap pour le jolie.
$categories[0]=[
 "id"=>1,
 "nom"=>"multimedia",
 ];
$categories[1]=[
 "id"=>2,
 "nom"=>"lecture",
 ];
$categories[2]=[
 "id"=>3,
 "nom"=>"sport",
 ]; 
// var_dump($categories);
// si je veux afficher les données du tableau
// dans les cards
// je boucle foreach
?>
<div class="row row-cols-1 row-cols-md-3 g-4">

<?php
foreach ($categories as $uneCategorie){ ?>
<div class="col">
   <div class="card h-100">
     <img src="..." class="card-img-top" alt="...">
     <div class="card-body">
       <h5 class="card-title"><?=$uneCategorie['nom']; ?></h5>
       <p class="card-text"> </p>
     </div>
   </div>
 </div>
  
<?php 
}
?>

</div>
Liste des produits

