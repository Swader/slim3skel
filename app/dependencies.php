<?php
// DIC configuration

$container = $app->getContainer();

// -----------------------------------------------------------------------------
// Service providers
// -----------------------------------------------------------------------------

// Twig
$view = new \Slim\Views\Twig(
    $app->settings['view']['template_path'],
    $app->settings['view']['twig']
);
$view->addExtension(new Twig_Extension_Debug());
$view->addExtension(new \Slim\Views\TwigExtension($app->router, $app->request->getUri()));

/** @var \Twig_Environment $env */
$env = $view->getEnvironment();
foreach ($app->settings['view']['globals'] as $global => $value) {
    $env->addGlobal($global, $value);
}

$container->register($view);

// Flash messages
$container->register(new \Slim\Flash\Messages);

// -----------------------------------------------------------------------------
// Service factories
// -----------------------------------------------------------------------------

// monolog
$container['logger'] = function ($c) {
    $settings = $c['settings']['logger'];
    $logger = new \Monolog\Logger($settings['name']);
    $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
    $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], \Monolog\Logger::DEBUG));
    return $logger;
};

// -----------------------------------------------------------------------------
// Action factories
// -----------------------------------------------------------------------------

$container['App\Action\HomeAction'] = function ($c) {
    return new App\Action\HomeAction($c['view'], $c['logger']);
};

$container['App\Controllers\IndexController'] = function ($c) {
    return new App\Controllers\IndexController($c['view'], $c['logger']);
};
