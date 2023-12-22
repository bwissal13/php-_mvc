<?php 

// require_once "config.php";
require_once "core/Router.php";

var_dump($_GET);

$router = new Router($_GET); // Get all url parameters
$controller = $router->createController();

if($controller){
    $controller->runAction();
}