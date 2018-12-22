<?php

namespace App\Controllers;

use App\Core\Controller as BaseController;
use App\Core\View;
use App\Models\Main as MainModel;

class Main extends BaseController
{
    public function __construct()
    {
        $this->view = new View();
        $this->model = new MainModel();
    }

    public function index()
    {
        $this->view->generate("main");
    }
}
