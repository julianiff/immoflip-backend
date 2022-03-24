<?php

declare(strict_types=1);

require 'BaseController.php';
require './Model/Path.php';

class Router extends BaseController
{

    public function routeTo(array $path): string
    {

        if ($path[1] === "test") {
            $path = new Path($path[1]);
            return $path->getPath();
        }

        return $path[1];
    }
}