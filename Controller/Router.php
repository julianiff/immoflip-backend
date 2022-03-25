<?php

declare(strict_types=1);

require 'BaseController.php';
require './Service/UrlFactory.php';

class Router extends BaseController
{

    private static $routes = array();

    public static function route(string $url)
    {
        $factory = new UrlFactory();
        $path = $factory->createNewPath($url);

        foreach (self::$routes as $route) {            // echo $route["expression"];

            if ($route["expression"] == $path->getFullPath()) {                // var_dump($route);

                return call_user_func($route["fnc"]);
            }
        }
        echo "nothing found";
    }



    public static function add($expression, $function, $method = 'get')
    {
        array_push(self::$routes, array(
            'expression' => $expression,
            'fnc' => $function,
            'method' => $method
        ));
    }
}