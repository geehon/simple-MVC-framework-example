<?php

$app->get('/', '\App\Http\Controllers\WelcomeController:index');
$app->get('/blog', 'App\Http\Controllers\BlogController:index');

// admin login
$app->get('/admin/login', 'App\Http\Controllers\Admin\LoginController:index');

