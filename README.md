# Site vitrine du BDE

## Lancement du serveur de test

Sous **Windows**, utiliser la commande suivante (dans le dossier public/) :

    php -S localhost:8000

## Informations

Le projet n'utilise pas composer, contrairement à la SAÉ de Monsieur Cutrona, due à la taille du projet. Les pages PHP
n'auront donc pas l'autoloader de composer, il faudra utiliser cette ligne pour les fichiers demandées :

    require_once __DIR__ . '/../destination/fichier.php';