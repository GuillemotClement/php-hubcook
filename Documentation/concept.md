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