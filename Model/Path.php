<?php

class Path
{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function getPath(): string
    {
        $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

        return json_encode($age);
    }
}