<?php

namespace App\Core;

/**
 * Class View
 * @package App\Core
 */
class View
{
    /**
     * @param $body
     * @param null $data
     */
    public function generate($body, $data = null)
    {
        $body .= ".php";
        include_once __DIR__ . "/../View/" . $body;
    }
}
