<?php

class Path
{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function getFullPath(): string
    {
        return $this->path;
    }

    public function getFirstSegment(): string
    {
        $segments = explode("/", $this->path);
        return $segments >= 1 ? $segments[1] : "";
    }
}