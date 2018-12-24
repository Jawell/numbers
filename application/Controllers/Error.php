<?php

namespace App\Controllers;

use App\Core\Controller as BaseController;
use App\Core\View;

class Error extends BaseController
{
    public function __construct()
    {
        $this->view = new View();
    }

    public function index() {
        $this->view->generate('Error');
    }
}