Dans le fichier old
on lance le serveur avec 
php -S localhost:8000
On a créé un fichier accueil.php
on a créé le menu (header) et le footer
on a créé des page header.php et footer.php
on a mis des include header et footer pour 
appeller ces fichiers dans les autres pages
on a créé une sorte de routeur 'index.php' simplifié qui gere les include de facon unique et appelle le ficher grace a $_SERVER['path_info'].
on a créé un CRUD sans B.D. sur produit :
  - sur la page produit on a un tableau de produit
  - on boucle dessus
  - on a fait des liens pour voir le detail d'un produit

  On a fait pareil avec la connexion à la B.D.
 avec PDO. 
 CRUD complété sur ajouter un produit 
                   supprimer un produit
pareil pour utilisateur et categorie

Tout cela en MVC