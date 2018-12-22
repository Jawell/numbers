<?php

namespace App\Models;

class Main
{
    function toRoman($f)
    {
        if (!is_numeric($f) || $f <= 0) {
            return false;
        }
        $roman = array('M' => 1000, 'D' => 500, 'C' => 100, 'L' => 50, 'X' => 10, 'V' => 5, 'I' => 1);
        foreach ($roman as $k => $v) {
            if (($amount[$k] = floor($f / $v)) > 0) {
                $f -= $amount[$k] * $v;
            }
        }

        $return = '';
        foreach ($amount as $k => $v) {
            $return .= ($v <= 3) ? str_repeat($k, $v) : $k . $old_k;
            $old_k = $k;
        }
        return str_replace(array('VIV', 'LXL', 'DCD'), array('IX', 'XC', 'CM'), $return);
    }

    function toDecimal($str = '')
    {
        if (is_numeric($str)) {
            return false;
        }
        $roman = array('M' => 1000, 'D' => 500, 'C' => 100, 'L' => 50, 'X' => 10, 'V' => 5, 'I' => 1);
        for ($i = 0; $i < strlen($str); $i++) {
            if (isset($roman[strtoupper($str[$i])])) {
                $values[] = $roman[strtoupper($str[$i])];
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
