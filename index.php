<?php
ob_start();

require __DIR__ ."/vendor/autoload.php";

use Source\Core\Session;
use CoffeeCode\Router\Router;

$session = new Session();
$route = new Router(url(), "@");  


// Web Routes
$route->namespace("Source\Controllers");
$route->get("/", "web@home");
$route->get("/sobre", "web@about");


// Error Routes
$route->namespace("Source\Controllers")->group("/Oooops");
$route->get("/{errcode}", "web@error");


// Error Routes
$route->dispatch();


// Redirect 
if($route->error()){
      $route->redirect("/Oooops/{$route->error()}");
}


ob_end_flush();
