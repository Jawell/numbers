<?php

namespace App\Controllers;

use App\Core\Controller as BaseController;
use App\Models\Converter as Model;

/**
 * Take data from POST for converting
 *
 * Class Converter
 * @package App\Controllers
 */
class Converter extends BaseController
{
    /**
     * Regex for roman numeral
     */
    const REGEX = "/^M{0,4}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/";

    /**
     * Get instance of model class
     *
     * Converter constructor.
     */
    public function __construct()
    {
        $this->model = new Model();
    }

    /**
     * Call certain method for converting
     */
    public function discover()
    {
        $data = $_POST['number'];
        if (is_numeric($data) && ($data >= 0 && $data <= 3999)) {   //determine the type of number
            $this->response($this->model->toRoman($data));
        } else if ($data >= 4000) {
            $this->response("max: 3999");
        } else {
            if (preg_match(self::REGEX, strtoupper($data))) {
                $this->response($this->model->toArabic($data));
            } else {
                $this->response("incorrect numeral");
            }
        }
    }

    /**
     * Gives answer of convert operation
     *
     * @param $answer
     */
    private function response($answer)
    {
        echo json_encode(["answer" => $answer]);
    }
}
