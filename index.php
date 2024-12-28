<?php 

header("Content-Type: application/json");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router("http://localhost/PHP%20Projects/api_nintendo");

$router->namespace('Src\Controllers');

$router->get("/", "IndexController:info");
$router->get("/titles", "TitlesController:titles");

$router->dispatch();

if($router->error())
{
    var_dump($router->error());
}