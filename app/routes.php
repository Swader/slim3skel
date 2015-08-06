<?php
// Routes

$app->get('/', 'App\Action\HomeAction:dispatch')
    ->setName('homepage');

$app->get('/index', 'App\Controllers\IndexController:indexAction');
$app->get('/index/index', 'App\Controllers\IndexController:indexAction');
$app->get('/index/test', 'App\Controllers\IndexController:testAction');