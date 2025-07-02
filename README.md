# Site vitrine du BDE

## Commandes composer

### Lancement du serveur de test

Sous **Windows**, utilisez `composer start`, et tapez dans votre navigateur `http://localhost:8000/`

Pour utiliser les requêtes SQL, lancez Apache et MySQL avec le panneau de contrôle XAMPP.

### Rafraichissement de composer

```
composer du
composer install
```

## Connexion à la base de données

Pour accéder à la base de donnée, vous devrez vous connecter via votre propre base de données sur phpMyAdmin.
Vous devez avoir un fichier .mypdo.ini à la racine du fichier, contenant (par exemple) :

```
[mypdo]
dsn = 'mysql:host=localhost;dbname=binharry;charset=utf8'
username = 'root'
password = ''
```

L'username et le password sont les informations par défaut, et le dbname doit correspondre à celle de phpMyAdmin.

## Installation des prérequis

Sur **Windows**, téléchargez composer : https://getcomposer.org/doc/00-intro.md#installation-windows

Pour pouvoir utiliser les requêtes SQL, sur **Windows**, téléchargez XAMPP : https://www.apachefriends.org/fr/download.html

Éditez le fichier `C:\xampp\phpMyAdmin\config.inc.php`, ligne 27, rajoutez le port correspondant indiquée sur le panneau de contrôle XAMPP, dans la ligne du module MySQL (par défaut 3306, modifiez le dans Config si jamais il est déjà utilisée par une autre appli).

Le rendu devrait être : `$cfg['Servers'][$i]['host'] = '127.0.0.1:3306';` à cette ligne.

Importez la BDD en vous connectant à phpMyAdmin (bouton Admin du module MySQL, ou `http://localhost/phpmyadmin/`).