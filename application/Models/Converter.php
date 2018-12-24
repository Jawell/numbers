<?php

namespace App\Models;

/**
 * Class Converter
 * @package App\Models
 */
class Converter
{
    const ALPHABET = array('M' => 1000, 'D' => 500, 'C' => 100, 'L' => 50, 'X' => 10, 'V' => 5, 'I' => 1);

    /**
     * @param $number
     * @return mixed
     */
    function toRoman($number)
    {
        $amount = [];
        foreach (self::ALPHABET as $k => $v) {
            if (($amount[$k] = floor($number / $v)) > 0) { //$amount have amount of alphabet chars
                $number -= $amount[$k] * $v;
            }
        }

        $return = '';
        $oldKey = '';
        foreach ($amount as $key => $value) {
            $return .= ($value <= 3) ? str_repeat($key, $value) : $key . $oldKey;
            $oldKey = $key;
        }
        return str_replace(array('VIV', 'LXL', 'DCD'), array('IX', 'XC', 'CM'), $return);
    }

    /**
     * @param string $str
     * @return float|int|mixed
     */
    function toDecimal($str = '')
    {
        $values = [];
        for ($i = 0; $i < strlen($str); $i++) {
            if (isset(self::ALPHABET[strtoupper($str[$i])])) {
                $values[] = self::ALPHABET[strtoupper($str[$i])];
            }
        }

        $sum = 0;
        while ($current = current($values)) {
            $next = next($values);
            $next > $current ? $sum += $next - $current + 0 * next($values) : $sum += $current;
        }
        return $sum;
    }
}
