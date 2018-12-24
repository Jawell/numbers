<?php

namespace App\Controllers;

use App\Core\Controller as BaseController;
use App\Core\View;

/**
 * Class Main
 * @package App\Controllers
 */
class Main extends BaseController
{
    /**
     * Main constructor.
     */
    public function __construct()
    {
        $this->view = new View();
    }

    public function index()
    {
        $this->view->generate("Main");
    }
}
