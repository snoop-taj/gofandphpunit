<?php

namespace GOF\Structural\Facade;

class CaseReverseFacade
{
    
    public static function reverseStringCase($input)
    {
        $toArray = ArrayStringFunctions::stringToArray($input);

        $reversedCase = ArrayCaseReverse::reverseCase($toArray);

        $toString = ArrayStringFunctions::arrayToString($reversedCase);

        return $toString;
    }
}
