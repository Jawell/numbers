<?php

namespace App\Core;

class View
{
    public function generate($body, $data = NULL) {
        $body .= ".php";
        include_once "application/view/" . $body;
    }
}
