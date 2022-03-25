<?php

require "./Controller/UserController.php";
include('Router.php');

Router::add('/', function () {
    echo 'hey Homepage';
});

Router::add('/test', function () {
    echo 'hey das ist test Route';
});

Router::add('/hans', function () {
    echo 'hey das ist ein hans';
});
Router::add('/bun', function () {
    echo 'hey das ist ein bun';
});

Router::add('/user/15', function () {
    UserController::getUserById();
});