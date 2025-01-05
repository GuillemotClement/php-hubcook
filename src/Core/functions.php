<?php
//ROUTING---------------------------------------------------------------------------------------------------------------
/**
* Permet de retourner le path provenant de l'url
* @param string $url
* @return string
*/
function getUri(string $url):string
{
  return parse_url($url)['path'];
}