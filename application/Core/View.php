<?php

namespace App\Core;

class View
{
    public function generate($body, $data = null)
    {
        $body .= ".php";
        include_once "application/view/" . $body;
    }
}
