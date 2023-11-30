<?php
echo "test";
// 1 connexion à la B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');

// 2 requete
$statement=$pdo->query("select * from categorie");

// 3 recuperation des données
$categories=$statement->fetchAll(PDO::FETCH_ASSOC);
// var_dump($categories);


// afficher une liste de produits.
// produit issue de la B.D.
// recupere des données et on a les affiche avec
// foreach et le bootstrap pour le jolie.
// $categories[0]=[
//  "id"=>1,
//  "nom"=>"multimedia",
//  ];
// $categories[1]=[
//  "id"=>2,
//  "nom"=>"lecture",
//  ];
// $categories[2]=[
//  "id"=>3,
//  "nom"=>"sport",
//  ]; 
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
       <h5 class="card-title">
        <a href="/categorie?id=<?=$uneCategorie['id']; ?>"><?=$uneCategorie['nom']; ?></a></h5>
       <p class="card-text"> </p>
     </div>
   </div>
 </div>
  
<?php 
}
?>

</div>


