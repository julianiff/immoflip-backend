<?php

require "./lib/bootstrap.php";

include './Controller/Routing.php';

Router::route($_SERVER['REQUEST_URI']);
// $router = new Router();
// echo $router->route($_SERVER['REQUEST_URI']);