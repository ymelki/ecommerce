Dans le fichier old  
on lance le serveur avec   
php -S localhost:8000  
On a créé un fichier accueil.php  
on a créé le menu (header) et le footer  
on a créé des page header.php et footer.php  
on a mis des include header et footer pour   
appeller ces fichiers dans les autres pages  
on a créé une sorte de routeur 'index.php'   simplifié qui gere les include de facon unique et appelle le ficher grace a $_SERVER['path_info'].  
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

1. refaire tout le projet.  
2. Faire pareil que ce qu'on a fait sur l'ajout de produit avec la catégorie.  
3. ajouter les images  
 - Créé une colonne nom_image dans la table produit
 - dans la requete d'insertion il faudra inserer le nom de l'image
 - il faut stocker dans le serveur les images réél.  
https://espritweb.fr/comment-uploader-une-image-en-php/