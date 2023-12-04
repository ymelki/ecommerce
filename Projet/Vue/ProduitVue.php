<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">
            <a href="/produits?id=<?=$produit['id']; ?>&action=readone"><?=$produit['nom']; ?></a>
            </h5>
            <p class="card-text"><?=$produit['prix']; ?> €</p>
        </div>
        </div>
    </div>
</div>