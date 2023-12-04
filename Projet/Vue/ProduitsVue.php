
<div class="row row-cols-1 row-cols-md-3 g-4">

<?php
foreach ($produits as $unProduit){ ?>
 <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">
          <a href="/produits?id=<?=$unProduit['id']; ?>&action=readone"><?=$unProduit['nom']; ?></a>
        </h5>
        <p class="card-text"><?=$unProduit['prix']; ?> €</p>
      </div>
    </div>
  </div>
   
<?php 
}
?>