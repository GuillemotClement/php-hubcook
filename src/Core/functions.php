<?php
//ROUTING---------------------------------------------------------------------------------------------------------------
/**
* Permet de retourner le path provenant de l'url
* @param string $url
* @return string
*/



function requireController(string $path): void
{
  require BASE_PATH."src/controllers/$path.php";
}



function addRoute(string $path, string $controller, string $method, array $routes)
{
  $routes[] = [
    "path" => $path,
    "controller" => $controller,
    "method" => $method
  ];
  return $routes;
};

function routeGet(string $path, string $controller, $routes){
  addRoute($path, $controller, "GET", $routes);
}

// function routeGet()
// function routePost()
// function routePut()
// function routeDelete()