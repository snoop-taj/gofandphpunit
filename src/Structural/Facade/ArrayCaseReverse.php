<?php

namespace GOF\Structural\Facade;

class ArrayCaseReverse
{
    private static $uppercase =
        array('A', 'B', 'C', 'D', 'E', 'F', 'G',
              'H', 'I', 'J', 'K', 'L', 'M', 'N',
              'O', 'P', 'Q', 'R', 'S', 'T', 'U',
              'V', 'W', 'X', 'Y', 'Z');

    private static $lowercase =
        array('a', 'b', 'c', 'd', 'e', 'f', 'g',
              'h', 'i', 'j', 'k', 'l', 'm', 'n',
              'o', 'p', 'q', 'r', 's', 't', 'u',
              'v', 'w', 'x', 'y', 'z');


    public static function reverseCase($input)
    {
        $output = array();

        for ($i = 0; $i < count($input); $i++) {
            if (in_array($input[$i], self::$uppercase)) {
                $key = array_search($input[$i], self::$uppercase);
                $output[$i] = self::$lowercase[$key];
            } elseif (in_array($input[$i], self::$lowercase)) {
                $key = array_search($input[$i], self::$lowercase);
                $output[$i] = self::$uppercase[$key];
            } else {
                $output[$i] = $input[$i];
            }
        }
        return $output;
    }
}
