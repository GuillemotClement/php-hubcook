<?php

namespace Hubcook\Router;

class Router
{
  private array $routes = [];

  protected function addRoute(string $path, string $controller, string $method): void
  {
    $this->routes[] = [
      'path' => $path,
      'controller' => $controller,
      'method' => $method
    ];
  }

  public function addGetRoute(string $path, string $controller): void
  {
    $this->addRoute($path, $controller, 'GET');
  }

  public function getRoutes(): array
  {
    return $this->routes;
  }

}