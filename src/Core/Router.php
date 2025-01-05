<?php

namespace Hubcook\Core;

class Router
{
  public array $routes;

  public function requireController(string $path): void
  {
    require BASE_PATH."src/controllers/$path.php";
  }

  public function addRoute(string $path, string $controller, string $method): array
  {
    $this->routes[] = [
      'path' => $path,
      'controller' => $controller,
      'method' => $method
    ];
    return $this->routes;
  }

  /**
   * Retourne le path de l'url
   * @param string $url
   * @return string
   */
  protected function getPath(string $url):string
  {
    return parse_url($url)['path'];
  }

  /**
   * Route la requête vers le controller
   * Si le path ne match pas, retourne vers la page notFound
   * @param string $url : url de la requête
   * @param string $method : méthode de la requête
   * @return void
   */
  public function routeTo(string $url, string $method): void
  {
    $uri = $this->getPath($url);

    foreach ($this->routes as $route){
      if($uri === $route['path']){
        if($method === $route['method']){
          $this->requireController($route['controller']);
          exit();
        }
      }
    }

    http_response_code(404);
    require BASE_PATH."src/controllers/notFound.php";
    exit();
  }

  /**
   * Affiches les routes enregistrées
   * @return void
   */
  public function getRoute(): void
  {
    foreach ($this->routes as $route) {
      Utils::printValue($route);
    }
  }
}