<?php

namespace App\Abstracts;

use Psr\Log\LoggerInterface;
use Slim\Views\Twig;

abstract class BaseController
{
    protected $view;
    protected $logger;

    public function __construct(Twig $view, LoggerInterface $logger)
    {
        $this->view = $view;
        $this->logger = $logger;
    }


}