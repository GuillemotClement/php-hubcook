<?php
//ROUTING---------------------------------------------------------------------------------------------------------------
/**
* Permet de retourner le path provenant de l'url
* @param string $url
* @return string
*/
function getPath(string $url):string
{
  return parse_url($url)['path'];
}




function requireController(string $path): void
{
  require BASE_PATH."src/controllers/$path.php";
}

function routeTo(string $url, array $routes, string $method)
{
  $uri = getPath($url);

  foreach ($routes as $route) {
    if(in_array($uri, $route)){
      if($method === $route['method']){
        requireController($route['controller']);
      }
    }else{
      requireController('notfound');
    }
  }
}