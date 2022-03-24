<?php

require "./lib/bootstrap.php";
require "./Controller/Router.php";

$uri = explode('/', $_SERVER['REQUEST_URI']);

$router = new Router();
echo $router->routeTo($uri);