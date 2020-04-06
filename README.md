# php-exercices

Exercices 1, 2, 3
---

Les fichiers des exercices 1, 2 et 3 sont à éxécuter directement par la commande php (exemple "php exercice1.php"), veuillez décommenter les appels aux fonctions afin d'avoir un affichage visuel.

---

# Laravel
- Pré-requis : Git, Composer, PHP 7.2

- Dupliquer le fichier "env.example" et renommer celui-ci en ".env".
- Veuillez spécifier les différentes variables de connexion à la base de donnée afin de convenir à la vôtre.
- Ouvrez un terminal et positionnez vous dans le dossier laravel, lancer la commande "composer install" afin d'installer les vendors.
- Lancez la commande "php artisan migrate" afin de peupler la base de donnée.
- Lancer la commande "php artisan serve" pour demarrer le serveur de développement accessible à l'adresse spécifiée dans la variable d'environnement "APP_URL":8000.

# Utilisation

- "APP_URL":8000/person : Affiche la liste de Person de la base de donnée.
- "APP_URL":8000/person/{id} : Affiche les informations de la Person recherchée par son id.
- "APP_URL":8000/person/average : Affiche la moyenne de like globale.
- "APP_URL":8000/person/maxLike : Affiche la Person ayant le nombre de Like maximal.
- "APP_URL":8000/person/searchByName/{name} : Affiche les informations de la Person recherchée par son nom.
- "APP_URL":8000/person/searchByYear/{year} : Affiche les informations de la Person recherchée par son année de naissance.
- "APP_URL":8000/person/sortByLike : Affiche la liste de Person triée par le nombre de like de manière décroissante.
