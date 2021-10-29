<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;
use App\Interfaces\CalculatorInterface;
use Exception;

class CalculatorTest extends TestCase
{
    protected CalculatorInterface $calculator;

    public function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function test_area_calculation()
    {
        $this->assertEquals(4, $this->calculator->area(2, 2));
    }

    public function test_area_fails_with_negatives_values()
    {
        $this->expectException(Exception::class);
        $this->calculator->area(-1, 2);
    }
}
