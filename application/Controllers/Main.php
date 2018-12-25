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
     * Get instance of view class
     *
     * Main constructor.
     */
    public function __construct()
    {
        $this->view = new View();
    }

    /**
     * Generate main page
     */
    public function index()
    {
        $this->view->generate("Main");
    }
}
