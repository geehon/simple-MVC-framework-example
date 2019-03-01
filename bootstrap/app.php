<?php

$container = new \Slim\Container($config);
$app = new \Slim\App($container);

$config['db'] = function($container) {
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};

return $app;