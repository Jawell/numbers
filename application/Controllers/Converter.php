<?php

namespace App\Controllers;

use App\Core\Controller as BaseController;
use App\Models\Converter as Model;

/**
 * Class Converter
 * @package App\Controllers
 */
class Converter extends BaseController
{
    /**
     * Converter constructor.
     */
    public function __construct()
    {
        $this->model = new Model();
    }

    public function discover()
    {
        $data = $_POST['number'];
        if (is_numeric($data) && ($data >= 0 && $data <= 3999)) {
            $this->response($this->model->toRoman($data));
        } else if ($data >= 4000) {
            $this->response("max: 3999");
        } else {
            if (preg_match("/^M{0,4}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/", strtoupper($data))) {
                $this->response($this->model->toDecimal($data));
            } else {
                $this->response("incorrect numeral");
            }
        }
    }

    /**
     * @param $answer
     */
    private function response($answer)
    {
        echo json_encode(["answer" => $answer]);
    }
}
