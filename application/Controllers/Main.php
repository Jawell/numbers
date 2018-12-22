<?php

namespace App\Controllers;

use App\Core\Controller as BaseController;
use App\Core\View;

class Main extends BaseController
{
    public function __construct()
    {
        $this->view = new View();
    }

    public function index()
    {
        $this->view->generate("main");
    }
}
