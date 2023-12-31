 <?php

 // afficher une liste de produits.
// produit issue de la B.D.
// recupere des données et on a les affiche avec
// foreach et le bootstrap pour le jolie.

// remplacer les tableau en B.D.
// 1 . Connecte à la B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');

// 2 . Requete 
$statement=$pdo->query("select * from produit");

// 3 . Recupere
$produits=$statement->fetchAll(PDO::FETCH_ASSOC);
// var_dump($produits);

// $produits[0]=[
//   "id"=>1,
//   "nom"=>"ordinateur",
//   "prix"=>3000
// ];
// $produits[1]=[
//   "id"=>2,
//   "nom"=>"livre",
//   "prix"=>50
// ];
// $produits[2]=[
//   "id"=>3,
//   "nom"=>"telephone",
//   "prix"=>100
// ];
// $produits[3]=[
//   "id"=>4,
//   "nom"=>"trotinnete",
//   "prix"=>300
// ];
// var_dump($produits);
// si je veux afficher les données du tableau
// dans les cards
// je boucle foreach
?>
<div class="row row-cols-1 row-cols-md-3 g-4">

<?php
foreach ($produits as $unProduit){ ?>
 <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">
          <a href="/produit?id=<?=$unProduit['id']; ?>"><?=$unProduit['nom']; ?></a>
        </h5>
        <p class="card-text"><?=$unProduit['prix']; ?> €</p>
      </div>
    </div>
  </div>
   
<?php 
}
?>
 
</div>
<br>
<a href="/creerproduit" class="btn btn-lg btn-primary btn-block">
                   Ajouter un produit
</a> 
