<?php

namespace App\Controllers;

use App\Abstracts\BaseController;

final class IndexController extends BaseController
{
    public function indexAction($request, $response, $args)
    {
        $this->logger->info("Index action");

        $this->view->render($response, 'home.twig');
        return $response;
    }

    public function testAction($request, $response, $args)
    {
        $this->logger->info("Test action");

        $this->view->render($response, 'home.twig');
        return $response;
    }

}