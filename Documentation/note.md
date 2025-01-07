# Namespace

Un namespace est un "conteneur" virtuel qui permet d'organiser et regrouper des éléments liés (classes, interfaces, fonctions, constantes) dans un même espace de noms pour éviter les conflits.

Le namespace doit refléter la structure des dossiers. On ne viens pas préciser le nom du fichier dans la définition du namespace.

## Objectif

- Eviter les conflits de noms entre les classes
- Organiser le code de manière logique
- Faciliter l'autoloading

## Syntaxe

```php
namespace <folderRoot\<folder>; //déclaration du namespace

class <nameClasse>
{

}
```

Si le fichier est contenu dans un premier folder, puis dans un autre plus spécifique, il faudras le préciser dans le nom du namesapce.

Par exemple :
```
SuperProjet/
    └── src/
        └── Database/
            ├── Database.php
            └── Models/
                └── RecipeModel.php
```
Il faudra utiliser ce nom de namespace pour le fichier `RecipeModel.php`

```php
namespace SuperProjet\Database\Models;

use SuperProjet\Database\Database;  // Pour utiliser la classe parente

class RecipeModel extends Database {
    // Code...
}
```

## Importer le namespace

Une fois le namespace et la classe déclaré, pour pouvoir activer l'autolad et importer automatiquement la classe, il faudras ajouter en haut du fichier :

```php
<?php
// Importer la classe au début du fichier
use SuperProjet\Database\Models\RecipeModel;

// Utilisation
$recipeModel = new RecipeModel();
$recipes = $recipeModel->recipeList();

// Faire quelque chose avec $recipes
foreach($recipes as $recipe) {
    echo $recipe['title'];
}
```
On pourras venir ajouter un alias :

```php
use SuperProjet\Database\Models\RecipeModel as Recipe;
$recipe = new Recipe();
```

## Autoload

Pour que l'importation des classes se fasse automatiquement, il faudras venir init composer dans le projet.

Il faudras ensuite importer le fichier `autoload.php` depuis le folder `vendor`.

On faudras également venir configurer l'autoload dans le fichier `composer.json`:
```json
    "name": "clement/php-hubcook",
    "autoload": {
        "psr-4": {
            "Hubcook\\": "src/" //tous les namespaces ajouter dans le dossier src seront automatiquement pris en compte.
        }
    },
    "authors": [
        {
            "name": "GuillemotClement",
            "email": "guillemot.clement@protonmail.com"
        }
    ],
    "require": {
        "vlucas/phpdotenv": "^5.6"
    }
```

### Rechargement de l'autolad

Le rechargement de l'autoload se fait via la commande :
```shell
composer dump-autoload
```


Il sera nécessaire de venir recharger l'autoload dans les cas suviants :
- Modification du composer.json
  - Changement de configuration de l'autoload
  - Ajout de nouvel dépendances
- Changement structurel
  - Ajouter de dossier devant être autoloader
  - Déplacement de dossier/fichier
  - Renommage de namespace

Il n'est pas nécessaire de recharger dans ces cas :
- Ajoute d'une nouvelle classe dans un dossier déjà configurer
- Modification du code d'une classe existante
- Ajout de méthode à une clase

# Class Router

Le principe fondamental s'articule autour de quelques concepts clés :
Premièrement, votre classe de routing devrait avoir une structure permettant de stocker les routes. Imaginez cela comme une table de correspondance (un dictionnaire ou une map) qui associe :

Un modèle d'URL (pattern)
Une méthode HTTP (GET, POST, etc.)
Une action à exécuter (controller/callback)

Pour ajouter une nouvelle route, vous auriez besoin d'une méthode qui :

Prend en paramètres le pattern d'URL, la méthode HTTP et l'action associée
Les stocke dans votre structure de données
Gère éventuellement les paramètres variables dans l'URL (comme /utilisateur/{id})

Le processus de routing lui-même fonctionnerait ainsi :

Réception d'une requête
Extraction de l'URL et de la méthode HTTP
Comparaison avec les patterns stockés
Si correspondance trouvée, exécution de l'action associée
Sinon, gestion d'une erreur 404

Pour la gestion des paramètres variables, vous pourriez utiliser des expressions régulières pour faire correspondre les patterns d'URL avec les URLs réelles.
