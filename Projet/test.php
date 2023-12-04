<?php
// comprendre en priorité $_GET en fait
// enoncé :
/**
 * Impact sur la b.d. et sur le code
 * quand je clique sur une catégorie
 * je veux qu'une autre page s'ouvre
 * et voir le nom de la catégorie
 * avec les produits associés.
 * 
 * 1. quels sont les impacts sur la B.D ?
 * 2. Mettre à jour la B.D. au niveau de la structure
 * 3. créé des données de test 
 * 4. a. je met a jour la classe Data 
 *                    permettant de requeter en B.D
 *    b.              la vue categories
 *    c.              le controlleur categorie
 *    d.   cree une nouvelle vue catorie qui affichera
 *    e.   la catégorie avec les produits associés
 *     cree la route dans le fichier index.
 */

// sans B.D
// user


// sans MVC (avec B.D.)
// avec MVC => tout le code en dessous
// il faudra un controlleur qui va l'exprimer en faisant appel au
// modele à la vue : décrire la logique. A ce controlleur sera affecté
// une route
// table prete
// liste des users
// 1 Se connecter à la B.D.
// 2 requete 
// 3 recuperer les données
$pdo = new \PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');

// 2 . Requete 
$statement=$pdo->query("select * from user");

// 3 . Recupere
$users=$statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($users);
// => 12 à 19 : Relation à la B.D. => Modele
// plus bas => affichage : Vue
?>
<div class="row row-cols-1 row-cols-md-3 g-4">

<?php
foreach ($users as $user){ ?>
 <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">
          <a href="/produit?id=<?=$user['id']; ?>"></a>
        </h5>
        <p class="card-text"><?=$user['login']; ?> </p>
      </div>
    </div>
  </div>
   
<?php 
}

// avec mvc
?>


