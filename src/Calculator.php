<?php

namespace App;

use App\Interfaces\CalculatorInterface;
use Exception;

class Calculator implements CalculatorInterface
{
    public function area(int $a, int $b): int
    {
        if ($a < 0 || $b < 0) {
            throw new Exception();
        }

        return $a * $b;
    }
}
