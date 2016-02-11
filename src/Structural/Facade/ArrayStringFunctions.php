<?php

namespace GOF\Structural\Facade;

class ArrayStringFunctions
{

    public static function arrayToString($input)
    {
        $output = null;

        foreach ($input as $value) {
            $output .= $value;
        }
        return $output;
    }

    public static function stringToArray($input)
    {
        return str_split($input);
    }
}
