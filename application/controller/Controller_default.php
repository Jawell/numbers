<?php

class Controller_default extends Controller
{
    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model_default();
    }

    public function index() {
        $this->view->generate("main");
    }
}