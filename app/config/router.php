<?php

/** @var Phalcon\Mvc\Router $router */
$router = $di->getRouter();

// Define your routes here
$router->addGet('/mitoop', [
    "controller" => "mitoop",
    "action"     => "tuning",
]);

$router->handle();
