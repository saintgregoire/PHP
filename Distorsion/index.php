<?php
require './config/autoload.php';

$route = null;

if(isset($_GET['route']) && !empty($_GET['route'])){
    $route = $_GET['route'];
}

$router = new Router();
$router->handleRequest($route);


?>