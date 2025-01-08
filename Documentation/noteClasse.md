# Classe

## Hook

 ```php
class Router { 
  //déclaration de la propriété
	private array $routes { 
	  //getter
		get { 
			return $this->routes; 
		} 
		//setter
		set($value) { 
			if (!is_array($value)) { 
				throw new TypeError('Les routes doivent être un tableau'); 
			}
			 $this->routes = $value; 
		 } 
		 //initialisation
		 init { 
			 return []; 
		 } 
	 } 
 }
```

On pourras également ajouter du typage :
```php
class Router {
    // On type la propriété comme array
    private array $routes {
        // On peut typer le retour du getter
        get: array {
            return $this->routes;
        }
        // On peut typer le paramètre du setter
        set(array $value) {
            // La validation reste une bonne pratique même avec le typage
            if (empty($value)) {
                throw new InvalidArgumentException('Les routes ne peuvent pas être vides');
            }
            $this->routes = $value;
        }
        // On peut typer le retour de l'init
        init: array {
            return [];
        }
    }
}
```
