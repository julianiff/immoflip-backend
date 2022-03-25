<?php

class UserController
{


    public static function getUserById()
    {
        echo json_encode(array("id" => 1, "name" => "hans"));
    }
}