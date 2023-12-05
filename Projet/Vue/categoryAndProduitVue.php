<h1>Catégorie : <?=$categoryAndProduit[0]['categorie_nom'] ?></h1>


<div class="row row-cols-1 row-cols-md-3 g-4">

<?php
foreach ($categoryAndProduit as $uncategoryAndProduit){ 
   ?>
 <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">
          <a href="/produits?id=<?=$uncategoryAndProduit['id']; ?>&action=readone"><?=$uncategoryAndProduit['produit_nom']; ?></a>
        </h5>
        <p class="card-text"><?=$uncategoryAndProduit['prix']; ?> €</p>
      </div>
    </div>
  </div>
   
<?php 
}
?>