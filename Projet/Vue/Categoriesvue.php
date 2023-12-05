
<div class="row row-cols-1 row-cols-md-3 g-4">

<?php
foreach ($categories as $categorie){ ?>
 <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">
          
        </h5>
        <p class="card-text"><a href="/categorie?id=<?=$categorie['id']; ?>&action=readone"><?=$categorie['nom']; ?></a></p>
      </div>
    </div>
  </div>
   
<?php 
}
?>