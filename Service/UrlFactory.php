<?php

require './Model/Path.php';

class UrlFactory
{
    public function createNewPath(string $url): Path
    {
        return new Path($url);
    }
}