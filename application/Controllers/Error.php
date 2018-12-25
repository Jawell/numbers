<?php

namespace App\Controllers;

use App\Core\Controller as BaseController;
use App\Core\View;

/**
 * Class Error
 * @package App\Controllers
 */
class Error extends BaseController
{
    /**
     * Get instance of view class
     *
     * Error constructor.
     */
    public function __construct()
    {
        $this->view = new View();
    }

    /**
     * Generate error page
     */
    public function index() {
        $this->view->generate('Error');
    }
}